@extends('layouts.app')

@section('institucional')
<div class="flex inline-block justify-between items-center">
    <div class="pl-6">
        <span class="text-xm">{{ $titulo_pagina }}</span>
    </div>

    <hr class="style-two">
</div>
<div class="pl-6 pt-4 pr-4">
    <p>{{ $dados }}</p>
</div>
 
@endsection