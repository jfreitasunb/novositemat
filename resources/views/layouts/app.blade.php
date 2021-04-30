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
        @if (!Route::currentRouteNamed('gc'))
            <div class="flex flex-col h-screen justify-between">
        @else
            <div class="">
        @endif
            <header>
                <div class="p-4 flex md:justify-between items-center">
                    <!-- left side -->
                    <x-logo-site-mat></x-logo-site-mat>
    
                    <!-- center -->
                    <x-titulo-site-mat></x-titulo-site-mat>
    
                    <!-- right side -->
                    @if (!Route::currentRouteNamed('gc'))
                        <x-idiomas-pesquisa></x-idiomas-pesquisa>
                    @endif
                </div>
                @if (!Route::currentRouteNamed('gc'))
                    <x-menu-principal></x-menu-principal>
                @endif
                
                <div class="pb-4">
                    <hr style="background: #00427e; height: 4px;opacity: 1;">    
                </div>
            </header>

            <!-- área principal -->
        @if (Route::currentRouteNamed('login'))
            <main class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        @else
            <main>
        @endif
                @if (Route::currentRouteNamed('gc'))
                    <x-gc></x-gc>
                @endif

                @if (Route::currentRouteNamed('login'))
                    <x-area-login></x-area-login>
                @else
                    <div class="grid grid-cols-4 gap-0">
                        <!-- menu à esquerda e notícias rolando -->
                        @if (!Route::currentRouteNamed('gc'))
                            <x-menu_lateral_esquerda/>
                        @endif

                        <!-- área com mais notícias -->
                        @if (Route::currentRouteNamed('home'))
                            <x-slider-noticias></x-slider-noticias>
                        @endif
                    </div>
                    <div>
                        @if (!Route::currentRouteNamed('gc'))
                            <!-- destaque à esquerda -->
                            <div class="flex inline-block justify-between items-center">
                                <div class="pl-6">
                                    <span class="text-xm">Notícias</span>
                                </div>

                                <hr class="style-one">
                                    
                                <div class="pr-6">
                                    <a class="text-xs" href="#">Veja todas as notícias</a>
                                </div>
                            </div>

                            <div class="grid grid-cols-2">
                                {{-- notícia de destaque --}}
                                @if (Route::currentRouteNamed('home'))
                                    <x-noticia-principal></x-noticia-principal>
                                @endif
                                
                                <!-- mais alguns destaques -->
                                @if (Route::currentRouteNamed('home'))
                                    <x-mais-noticias></x-mais-noticias>y
                                @endif
                            </div>
                        @endif
                    </div>
                @endif
            </main>
            
            <!-- footer -->
            <footer class="h-10">
                <hr style="background: #00427e; height: 4px;opacity: 1;">
                <p class="">Departamento de Matemática - {{ date("Y") }}</p>
            </footer>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="slick/slick.js" charset="utf-8"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
          $('.responsive').slick({
            dots: true,
            rows: 1,
            dotsClass: 'slick-dots',
            arrows: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            cssEase: 'linear',
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
        });
    </script>
</html>