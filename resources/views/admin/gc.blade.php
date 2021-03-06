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
        <main>
            @auth
                <nav class="bg-gray-400">
                    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between h-16">
                          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                              <span class="sr-only">Open main menu</span>
                              
                              <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                          </div>
                          <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="hidden sm:block sm:ml-6">
                              <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="{{ route('menus.site') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Menu Superior</a>

                                <a href="{{ route('conteudo.institucional') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Conteúdo Institucional</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                              </div>
                            </div>
                          </div>
                          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" href="route('logout')" 
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                            {{ __('Log out') }}
                                    </a>
                                </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </nav>
                <div class="justify-center">
                    @yield('menus_site')
                    @yield('institucional')
                </div>
            @endauth

            @guest
                @include('admin.login_gc')
            @endguest
        </main>
        
</body>

<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        mode : "textareas",
        // selector: 'textarea.institucinal_pt',
        height: 300,

        menubar: false,

        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],

        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
    });
</script>
</html>