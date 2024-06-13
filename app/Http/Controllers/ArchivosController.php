<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function index()
    {
        return view('admin.archivos.index');
    }
}
