<div class="ml-10 bg-noticias w-1/2">
    <ul class="ml-4 list-disc list-inside text-azulMAT3 text-lg">
        @foreach ($menu_lateral as $menu)
            <a class="text-azulMAT3" href="#"><li class="li_personalizada hover:bg-gray-300 py-2 text">{{ $menu['nome_menu'] }}</li></a>
        @endforeach
    </ul>
</div>