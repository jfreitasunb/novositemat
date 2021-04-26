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
    
                    <!-- right side -->
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
                <div class="flex items-center justify-center pb-6 relative text-azulMAT2">
                    <nav class="relative flex flex-wrap items-center px-2 mb-3">
                        <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
                            <ul class="flex flex-col md:flex-row list-none ml-auto text-lg">
                                <li class="nav-item pr-4 border-transparent border-b-8 border-verdeMAT">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug" href="#">Home
                                    </a>
                                </li>
                                <li class="nav-item border-transparent border-b-8 hover:border-verdeMAT">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="pagina_modelo.html">Institucional
                                    </a>
                                </li>
                                <li class="nav-item dropdown inline-block relative">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">Graduação
                                    </a>
                                    <div class="dropdown-menu top-0 absolute hidden h-auto flex pt-4 shadow">
                                        <ul class="dropdown-menu absolute hidden pt-1">
                                            <li class=""><a class="rounded-t bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Cursos</a></li>
                                            <li class=""><a class="bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Coordenação</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">E-mural</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Programas Institucionais</a></li>
                                          </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown inline-block relative">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">Pós Graduação
                                    </a>
                                    <div class="dropdown-menu top-0 absolute hidden h-auto flex pt-4 shadow">
                                        <ul class="dropdown-menu absolute hidden pt-1">
                                            <li class=""><a class="rounded-t bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Sobre</a></li>
                                            <li class=""><a class="bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Mestrado</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Doutorado</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Profmat</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Inscrições</a></li>
                                          </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown inline-block relative">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">Pesquisa
                                    </a>
                                    <div class="dropdown-menu top-0 absolute hidden h-auto flex pt-4 shadow">
                                        <ul class="dropdown-menu absolute hidden pt-1">
                                            <li class=""><a class="rounded-t bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Publicações</a></li>
                                            <li class=""><a class="bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Linhas de Pesquisa</a></li>
                                          </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown inline-block relative">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">Extensão
                                    </a>
                                    <div class="dropdown-menu top-0 absolute hidden h-auto flex pt-4 shadow">
                                        <ul class="dropdown-menu absolute hidden pt-1">
                                            <li class=""><a class="rounded-t bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Submissão de propostas</a></li>
                                            <li class=""><a class="bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Programa/Projetos/Ações</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Fale Conosco</a></li>
                                            <li class=""><a class="rounded-b bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="#">Sobre a Extensão</a></li>
                                          </ul>
                                    </div>
                                </li>
                                <li class="nav-item border-transparent border-b-8 hover:border-verdeMAT">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">Pessoas
                                    </a>
                                </li>
                                <li class="nav-item border-transparent border-b-8 hover:border-verdeMAT">
                                    <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">Contato
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="pb-4">
                    <hr style="background: #00427e; height: 4px;opacity: 1;">    
                </div>
            </header>

            <!-- área principal -->
                
            <main>
                <!-- menu à esquerda e notícias rolando -->
                <div class="grid grid-cols-4 gap-0">
                    <div class="ml-10 bg-noticias w-1/2">
                        <ul class="ml-4 list-disc list-inside text-azulMAT3 text-lg">
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2 text">Notícias</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Seminários</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Concursos</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Eventos</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Links e Documentos</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Mídia MAT</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Galeria</li></a>
                            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2">Comissões</li></a>
                        </ul>
                    </div>

                    <!-- notícias -->
                    <div class="slider responsive col-span-3 bg-gray-400 p-10 w-3/4">
                        <div><img src="imagens/1.png"></div>
                        <div><img src="imagens/2.jpg"></div>
                    </div>
                    
                </div>

                <!-- área com mais notícias -->
                <div>
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
                        <div class="p-4">
                            <img src="imagens/mat-entrada.jpg" style="width: 580px; height: 397px">
                        </div>
                        <!-- mais alguns destaques -->
                        <div class="w-3/4">
                            <div class="inline-block">
                                <div class="float-left">
                                    <a href="#" title=""><img src="imagens/mat-entrada.jpg" style="height: 87px"></a>
                                </div>
                                <div class="float-left">
                                    <a href="#" title="">
                                        <div class="ml-2 font-bold text-lg">Exame de Qualificação ao Mestrado 2020.2</div>
                                        <p class="ml-2">Inscrições para  Exame de Qualificação ao Mestrado 2020.2</p>
                                    </a>
                                    <div class="mt-2 float-right"><a href="#" title="">Leia mais</a></div>
                                </div>
                            </div>
                            <div class="inline-block">
                                <div class="float-left">
                                    <a href="#" title=""><img src="imagens/mat-entrada.jpg" style="height: 87px"></a>
                                </div>
                                <div class="float-left">
                                    <a href="#" title="">
                                        <div class="ml-2 font-bold text-lg">Exame de Qualificação ao Mestrado 2020.2</div>
                                        <p class="ml-2">Inscrições para  Exame de Qualificação ao Mestrado 2020.2</p>
                                    </a>
                                    <div class="mt-2 float-right"><a href="#" title="">Leia mais</a></div>
                                </div>
                            </div>
                            <div class="inline-block">
                                <div class="float-left">
                                    <a href="#" title=""><img src="imagens/mat-entrada.jpg" style="height: 87px"></a>
                                </div>
                                <div class="float-left">
                                    <a href="#" title="">
                                        <div class="ml-2 font-bold text-lg">Exame de Qualificação ao Mestrado 2020.2</div>
                                        <p class="ml-2">Inscrições para  Exame de Qualificação ao Mestrado 2020.2</p>
                                    </a>
                                    <div class="mt-2 float-right"><a href="#" title="">Leia mais</a></div>
                                </div>
                            </div>
                            <div class="inline-block">
                                <div class="float-left">
                                    <a href="#" title=""><img src="imagens/mat-entrada.jpg" style="height: 87px"></a>
                                </div>
                                <div class="float-left">
                                    <a href="#" title="">
                                        <div class="ml-2 font-bold text-lg">Exame de Qualificação ao Mestrado 2020.2</div>
                                        <p class="ml-2">Inscrições para  Exame de Qualificação ao Mestrado 2020.2</p>
                                    </a>
                                    <div class="mt-2 float-right"><a href="#" title="">Leia mais</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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