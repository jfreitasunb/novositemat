<div class="flex items-center justify-center pb-6 relative text-azulMAT2">
    <nav class="relative flex flex-wrap items-center px-2 mb-3">
        <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
            <ul class="flex flex-col md:flex-row list-none ml-auto text-lg">
                @foreach ($menu_principal as $menu)
                    @if (!$menu['dropdown'])
                        <li class="nav-item pr-4 border-transparent border-b-8 border-verdeMAT hover:border-verdeMAT">
                            <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="{{ $menu['link'] }}">{{ $menu['nome_menu'] }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown inline-block relative">
                            <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">{{ $menu['nome_menu'] }}
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
                    @endif
                @endforeach
                
                {{-- <li class="nav-item border-transparent border-b-8 hover:border-verdeMAT">
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
                </li> --}}
            </ul>
        </div>
    </nav>
</div>