<?php

namespace App\Http\Controllers\PaginaPrincipal;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;

use App\Models\MenuSite;

use App\Models\Institucional;

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
        $locale = app()->getLocale();

        $menu_principal = $this->menu_principal($locale);

        $itens_dropdown = $this->itens_dropdown($locale);

        $menu_lateral = $this->menu_lateral($locale);

        $dados = Institucional::where('locale', $locale)->orderBy('updated_at', 'DESC')->get()->first()->institucional;

        $titulo_pagina = MenuSite::where('locale', $locale)->where('link', Route::currentRouteName())->where('ativo', True)->orderBy('ordem_menu')->get()->first()->nome_menu;
        
        $show_slides = False;

        $show_noticias = False;

        return view('templates.partials.institucional', compact('dados', 'titulo_pagina', 'menu_principal', 'itens_dropdown', 'menu_lateral', 'show_slides', 'show_noticias'));
    }
}