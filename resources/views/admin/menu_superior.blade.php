@extends('admin.gc')

@section('menu_superior')
    <div class="bg-white flex py-8 justify-center items-center">
        <div class="bg-white shadow-xl rounded p-5">
            <x-auth-errors-validation/>
            <h1 class="text-3xl font-medium">Cadastrar entrada do menu superior</h1>
        
            <form class="space-y-5 mt-5" method="POST" action="{{ route('menu.superior') }}">
                @csrf
                <input type="text" name="texto_pt" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Texto em Português" />
                <div class="w-full flex items-center border border-gray-800 rounded px-3">
                    <input type="text" name="texto_en" class="w-4/5 h-12" placeholder="Texto em Português" />
                </div>

                <button class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection