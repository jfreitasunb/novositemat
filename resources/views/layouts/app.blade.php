<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Departamento de Matemática</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('imagens/logos/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('imagens/logos/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('imagens/logos/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ URL::asset('imagens/logos/site.webmanifest') }}">

    </head>
    <body class="antialiased">
        <div class="">
            {{-- header --}}
            <div class="">
                {{-- left side --}}
                <div class="">
                    <img src="{{ asset('imagens/logos/logo.png') }}" width="140" alt="Logo">
                </div>

                {{-- right side --}}

                <div class="">
                    <h1 class="">Departamento de Matemática</h1>
                </div>
                <div class="">
                      <div>
                          <select class="">
                            <option>Portugues</option>
                            <option>English</option>
                          </select>
                      </div>
                      <div>
                        <form class="flex">
                            <input class="" placeholder="Procurar"/>
                            <button class="">Buscar</button>
                        </form>     
                      </div>
                </div>
    ´
            </div>

            {{-- Language area --}}

            
            {{-- main area --}}

            {{-- footer --}}

            <footer class="">
                <p class="">Departamento de Matemática - {{ date("Y") }}</p>
            </footer>
        </div>
    </body>
</html>
