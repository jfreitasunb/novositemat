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
                        <a href="#"><img src="{{ URL::asset('imagens/logos/logo.png') }}" width="140" alt="Logo"></a>
                    </div>
    
                    <!-- center -->
    
                    <div class="md:w-2/3 md:self-center w-1/2 ml-2 md:mr-96">
                        <h1 class="text-azulMAT1 md:text-4xl md:text-center md:mb-4 font-bold">Departamento de Matemática</h1>
                    </div>
                    <hr style="background: #00427e; height: 4px;opacity: 1;">
                </div>
            </header>
            <main class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div>
                    <h2>Informe o e-mail para o qual deseja recuperar a senha</h2>    
                </div>

                <x-auth-status-session class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-errors-validation class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    {{-- @props(['status']) --}}
                    

                    <div class="p-4">
                        <label for="email" :value="__('Email')" />

                        <input id="email" class="border rounded shadow" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                    </div>

                    <div class="p-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Recuperar Senha
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