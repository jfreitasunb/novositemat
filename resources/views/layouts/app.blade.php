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
            <div class="p-4 flex lg:justify-between md:justify-between items-center">
                {{-- left side --}}
                <div class="p-4 flex lg:justify-between md:justify-between items-centerlg:w-1/3 md:w-1/2">
                    <a href="#"><img src="{{ asset('imagens/logos/logo.png') }}" width="140" alt="Logo"></a>
                </div>

                {{-- center --}}

                <div class="lg:w-2/3 lg:self-center md:w-1/2 ml-2 lg:mr-96">
                    <h1 class="text-azulMAT1 md:text-4xl md:text-center md:mb-4 font-bold">Departamento de Matemática</h1>
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
                                <a class="hover:border-b-8 border-fuchsia-600 px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Institucional
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Graduação
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Pós Graduação
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Pesquisa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Extensão
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Pessoas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="px-3 flex items-center text-xs uppercase font-bold leading-snug hover:opacity-75" href="#pablo">Contato
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div>
                <hr style="background: #00427e; height: 4px;opacity: 1;">    
            </div>

            {{-- área principal --}}
                
            {{-- menu à esquerda e notícias rolando --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="ml-10 bg-noticias w-1/4">
                    <ul class="ml-4 list-disc list-inside blue3">
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Notícias</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Seminários</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Concursos</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Eventos</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Links e Documentos</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Mídia MAT</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Galeria</li></a>
                        <a class="blue3" href="#"><li class="li_personalizada hover:bg-gray-300">Comissões</li></a>
                    </ul>
                </div>

                {{-- notícias --}}
                <div class="responsive slider bg-gray-400 w-3/4 p-10">
                    <div><img src="imagens/1.png"></div>
                    <div><img src="imagens/2.jpg"></div>
                </div>
                
            </div>

            {{-- área com mais notícias --}}
            <div>
                {{-- destaque à esquerda --}}
                <div>
                    <img src="#" alt="">
                </div>
                {{-- mais alguns destaques --}}
                <div>
                    <ul>
                        <li>
                            <img src="#" alt="">
                            <a href="#">Descrição</a>
                        </li>

                        <li>
                            <img src="#" alt="">
                            <a href="#">Descrição</a>
                        </li>

                        <li>
                            <img src="#" alt="">
                            <a href="#">Descrição</a>
                        </li>

                        <li>
                            <img src="#" alt="">
                            <a href="#">Descrição</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            {{-- footer --}}
            <footer class="h-10">
                <hr style="background: #00427e; height: 4px;opacity: 1;">
                <p class="">Departamento de Matemática - {{ date("Y") }}</p>
            </footer>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="{{ asset('slick/slick.js') }}" charset="utf-8"></script>
    
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
