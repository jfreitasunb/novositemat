@extends('admin.gc')

@section('institucional')
    <div class="bg-white flex py-8">
        <div class="bg-white shadow-xl rounded p-5">
            <x-auth-errors-validation/>
            <x-auth-status-session class="mb-4" :status="session('status')" />
            <h1 class="text-3xl font-medium">Dados Institucionais</h1>
        
            <form class="space-y-5 mt-5" method="POST" action="{{ route('conteudo.institucional') }}">
                @csrf
                <div class="mt-4 bg-gray-200">
                    <span class="text-gray-700">Informações em Português</span>
                    {{-- <div class="mt-2 ml-2"> --}}
                        <textarea class="institucional_pt" name="institucional_pt" class="w-full h-12 border border-gray-800 rounded px-3 @error('institucional_pt') border-red-500 @enderror"> {{ is_null($institucional_pt) ? old('institucional_pt') : $institucional_pt  }}</textarea>
                    {{-- </div> --}}
                    
                    <span class="text-gray-700">Informações em Inglês</span>
                    
                        <textarea class="institucional_en" name="institucional_en" class="w-full h-12 border border-gray-800 rounded px-3 @error('institucional_en') border-red-500 @enderror">{{ is_null($institucional_en) ? old('institucional_en') : $institucional_en  }}</textarea>
                    
                </div>
                <button class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection