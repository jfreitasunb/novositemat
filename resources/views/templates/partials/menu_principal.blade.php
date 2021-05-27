
    <div class="flex items-center justify-center pb-6 relative text-azulMAT2">
        <nav class="relative flex flex-wrap items-center px-2 mb-3">
            <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
                <ul class="flex flex-col md:flex-row list-none ml-auto text-lg">
                    @foreach ($menu_principal as $menu)
                        @if (!$menu['dropdown'])
                            <li class="nav-item pr-4 border-transparent border-b-8 border-verdeMAT hover:border-verdeMAT">
                                <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="{{ route($menu['link']) }}">{{ $menu['nome_menu'] }}
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown inline-block relative">
                                <a class="px-3 flex items-center text-xm font-bold leading-snug hover:opacity-75" href="#">{{ $menu['nome_menu'] }}
                                </a>
                                <div class="dropdown-menu top-0 absolute hidden h-auto flex pt-4 shadow">
                                    <ul class="dropdown-menu absolute hidden pt-1">
                                        @foreach ($itens_dropdown[$menu['id']] as $items)
                                            <li class=""><a class="rounded-t bg-noticias hover:bg-verdeMAT py-2 px-4 block whitespace-no-wrap" href="{{ $items['link'] }}">{{ $items['nome_menu'] }}</a></li>
                                        @endforeach
                                      </ul>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>

    <div class="pb-4">
        <hr style="background: #00427e; height: 4px;opacity: 1;">    
    </div>
</header>