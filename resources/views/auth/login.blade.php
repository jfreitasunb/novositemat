<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Departamento de Matemática</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('imagens/logos/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('imagens/logos/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('imagens/logos/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ URL::asset('imagens/logos/site.webmanifest') }}">

    </head>
    <body>
        <div class="flex flex-col h-screen justify-between">
            <header>
                <div class="p-4 flex md:justify-between items-center">
                    <!-- left side -->
                    <div class="p-4 flex md:justify-between items-center md:w-1/2">
                        <a href="#"><img src="imagens/logos/logo.png" width="140" alt="Logo"></a>
                    </div>
    
                    <!-- center -->
    
                    <div class="md:w-2/3 md:self-center w-1/2 ml-2 md:mr-96">
                        <h1 class="text-azulMAT1 md:text-4xl md:text-center md:mb-4 font-bold">Departamento de Matemática</h1>
                    </div>
                </div>
            </header>
            <main class="flex justify-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="p-4">
                        <label for="email" :value="__('Email')" />

                        <input id="email" class="border rounded shadow" type="email" name="email" :value="old('email')" required autofocus placeholder="Usuário" />
                    </div>

                    <!-- Password -->
                    <div class="p-4">
                        <label for="password" :value="__('Password')"></label>
                        <input id="password" class="border rounded shadow"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Senha" />
                    </div>

                    <!-- Remember Me -->
                    <div class="p-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="" name="remember">
                            <span class="">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="p-4 items-baseline">
                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button class="p-4 border-2 bg-blue-400 rounded">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </main>
        
            <!-- footer -->
            <footer class="h-10">
                <hr style="background: #00427e; height: 4px;opacity: 1;">
                <p class="">Departamento de Matemática - {{ date("Y") }}</p>
            </footer>
        </div>
    </body>
</html>