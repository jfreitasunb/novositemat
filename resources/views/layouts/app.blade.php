<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Departamento de Matemática</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('imagens/logos/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('imagens/logos/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('imagens/logos/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ URL::asset('imagens/logos/site.webmanifest') }}">

    </head>
    <body>
        <div class="flex flex-col h-screen justify-between">
            
            <header>
                <div class="p-4 flex lg:justify-between md:justify-between items-center">
                    {{-- left side --}}
                    <div class="p-4 flex lg:justify-between md:justify-between items-centerlg:w-1/3 md:w-1/2">
                        <a href="#"><img src="{{ asset('imagens/logos/logo.png') }}" width="140" alt="Logo"></a>
                    </div>

                    {{-- center --}}

                    <div class="lg:w-2/3 lg:self-center md:w-1/2 ml-2 lg:mr-96">
                        <p class="text-azul-MAT lg:text-4xl md:text-4xl md:text-center lg:mb-4">Departamento de Matemática</p>
                    </div>

                    {{-- right side --}}
                    <div class="w-1/4 align-middle">
                          <div class="m-auto">
                              <select class="w-3/4 py-2 bg-white border border-gray-300 rounded shadow">
                                <option>Portugues</option>
                                <option>English</option>
                              </select>
                          </div>
                          <div>
                            <form class="py-4">
                                <input class="w-1/2 border rounded text-sm border-0 shadow focus:outline-none text-base" placeholder="Procurar"/>
                                <button class="w-1/4 bg-blue-400 border rounded text-base">Buscar</button>
                            </form>     
                          </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <nav class="relative flex flex-wrap items-center px-2 mb-3">
                        <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
                          <ul class="flex flex-col lg:flex-row list-none ml-auto">
                              <li class="nav-item pr-4">
                                    <a class="hover:border-b-8 border-fuchsia-600 px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Home
                                </a>
                                
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Institucional
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Graduação
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Pós Graduação
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Pesquisa
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Extensão
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Pessoas
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">
                                  Contato
                                </a>
                              </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                
                <div>
                    <hr class="blueMAT" style="height: 4px;opacity: 1;">    
                </div>
            </header>
        <main>
        </main>
        
        {{-- footer --}}
        <footer class="h-10">
            <hr class="blueMAT" style="height: 4px;opacity: 1;">
            <p class="">Departamento de Matemática - {{ date("Y") }}</p>
        </footer>
    </div>

    </body>
</html>
