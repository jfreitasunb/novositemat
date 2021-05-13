@extends('admin.gc')

@section('menus_site')
    <div class="bg-white flex py-8 justify-center items-center">
        <div class="bg-white shadow-xl rounded p-5">
            <x-auth-errors-validation/>
            <x-auth-status-session class="mb-4" :status="session('status')" />
            <h1 class="text-3xl font-medium">Cadastrar entrada dos menus do site</h1>
        
            <form class="space-y-5 mt-5" method="POST" action="{{ route('menus.site') }}">
                @csrf
                <div class="mt-4 bg-gray-200">
                    <span class="text-gray-700">Nome do Menu</span>
                    <div class="mt-2 ml-2">
                        <input type="text" name="texto_pt" class="w-full h-12 border border-gray-800 rounded px-3 @error('texto_pt') border-red-500 @enderror"" placeholder="Texto em Português" value="{{ old('texto_pt') }}" required/>
                    </div>
                    
                    <div class="mt-2 ml-2">
                        <input type="text" name="texto_en" class="w-full h-12 border border-gray-800 rounded px-3 @error('texto_en') border-red-500 @enderror" placeholder="Texto em Inglês" value="{{ old('texto_en') }}" required/>
                    </div>
                </div>
                <div class="mt-4 bg-gray-200">
                    <span class="text-gray-700">Posição do Menu</span>
                    <div class="mt-2 ml-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="posicao_menu" value="superior" required>
                            <span class="ml-2">Menu Superior</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="posicao_menu" value="lateral">
                            <span class="ml-2">Menu Lateral</span>
                        </label>
                    </div>
                </div>

                <div class="mt-4 bg-gray-200">
                    <span class="text-gray-700">Menu ativo?</span>
                    <div class="mt-2 ml-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="menu_ativo" value="1" checked>
                            <span class="ml-2">Sim</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="menu_ativo" value="0">
                            <span class="ml-2">Não</span>
                        </label>
                    </div>
                </div>

                <button class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection                    