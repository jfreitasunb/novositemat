@if ($show_slides)
    <div class="grid grid-cols-4 gap-0">
        <div class="ml-10 bg-noticias w-1/2">
            <!-- menu à esquerda e notícias rolando -->
            <ul class="ml-4 list-disc list-inside text-azulMAT3 text-lg">
                @foreach ($menu_lateral as $menu)
                    <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2 text">{{ $menu['nome_menu'] }}</li></a>
                @endforeach
            </ul>
        </div>
        <!-- área geral -->

        @section('sidebar')
            <div class="slider responsive col-span-3 bg-gray-400 p-10 w-3/4">
                <div><img src="imagens/1.png"></div>
                <div><img src="imagens/2.jpg"></div>
            </div>
        @show
    </div>
@else
    <div class="flex">
        <div class="ml-10 bg-noticias flex-shrink-0 pr-2">
            <!-- menu à esquerda e notícias rolando -->
            <ul class="ml-4 list-disc list-inside text-azulMAT3 text-lg">
                @foreach ($menu_lateral as $menu)
                    <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2 text">{{ $menu['nome_menu'] }}</li></a>
                @endforeach
            </ul>
        </div>
        <div>
            @yield('institucional')
        </div>
    </div>
@endif