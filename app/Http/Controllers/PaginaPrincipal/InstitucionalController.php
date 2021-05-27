<?php

namespace App\Http\Controllers\PaginaPrincipal;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;

use App\Models\MenuSite;

use View;

use Session;

use Illuminate\Support\Facades\Route;

class InstitucionalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $dados = "temp";

        $locale = Session::get('locale');

        if (is_null($locale)) {
            $locale = app()->getLocale();
        }

        $titulo_pagina = MenuSite::where('locale', $locale)->where('link', Route::currentRouteName())->where('ativo', True)->orderBy('ordem_menu')->get();

        dd($titulo_pagina);

        $show_slides = False;

        $show_noticias = False;

        // $titulo_pagina = "Temporarioa";

        return view('templates.partials.institucional', compact('dados', 'titulo_pagina', 'show_slides', 'show_noticias'));
    }
}