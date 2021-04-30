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
                        <a href="{{URL::to('/')}}"><img src="{{ URL::asset('imagens/logos/logo.png') }}" width="140" alt="Logo"></a>
                    </div>
    
                    <!-- center -->
    
                    <div class="md:w-2/3 md:self-center w-1/2 ml-2 md:mr-96">
                        <h1 class="text-azulMAT1 md:text-4xl md:text-center md:mb-4 font-bold">Departamento de Matemática</h1>
                    </div>
                    <hr style="background: #00427e; height: 4px;opacity: 1;">
                </div>
            </header>
            <main class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <!-- Session Status -->
                <x-auth-status-session class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-errors-validation class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="username" :value="__('Username')" />

                        <x-input id="username" class="block mt-1 w-full" type="username" name="username" :value="old('username')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-3">
                            {{ __('Log in') }}
                        </x-button>
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