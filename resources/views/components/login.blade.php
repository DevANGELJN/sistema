{{-- LOGIN BLADE --}}
@section('content')
    <div class="container-login gradient-custom-2">

        <div class="containerlogin">
            <div class="header">
                <i class="bi bi-person-rolodex icon"></i>
            </div>
            <div class="underline"></div>

            <form class="text-form" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="inputs">
                    <div data-mdb-input-init class="input">
                        <i class="bi bi-person-circle icon-log"></i>

                        <input id="email" type="email" @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div data-mdb-input-init class="input">
                        <i class="bi bi-lock icon-log"></i>

                        <input id="password" type="password" @error('password') is-invalid 
                    @enderror"
                            name="password" required autocomplete="current-password" placeholder="Contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="submit-container">
                    <button class="submit" type="submit"><span>Ingresar</span></button>
                </div>
            </form>
        </div>
    </div>
