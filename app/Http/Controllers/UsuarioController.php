<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Iluminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index',[
            'usuarios'=>$usuarios,
            Paginator::useBootstrapFive(),
            'usuarios' => DB::table('users')->paginate(10)
        ]);
        
    }

    public function create()
    {
        return view('admin.usuarios.create');

    }
    
    public function store(Request $request)
    {
        // $datos = request()->all();
        // return response()->json($datos);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],            
        ]);

        $usuario = new User();
        $usuario -> name = $request->name;
        $usuario -> email = $request->email;
        $usuario -> password = Hash::make($request['password']);        

        $usuario->save();

        return redirect()->route(route:'usuarios.index')
            ->with('mensaje','Se registro al usuario de manera correcta')
            ->with('icono','success');
    }
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.show',['usuario'=>$usuario]);

    }
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.edit',['usuario'=>$usuario]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],            
        ]);

        $usuario = User::find($id);
        $usuario -> name = $request->name;
        $usuario -> email = $request->email;
        $usuario -> password = Hash::make($request['password']);
        $usuario->save();

        return redirect()->route(route:'usuarios.index')
            ->with('mensaje','Se actualizo al usuario correctamente')
            ->with('icono','success');
    }

    public function destroy($id)
    {
       User::destroy($id);
       return redirect()->route(route:'usuarios.index')
            ->with('mensaje','Se elimino al usuario correctamente')
            ->with('icono','success');
    }
    
}

