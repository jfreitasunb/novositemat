<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\MenuSite;

use App\Models\SubMenu;

use Session;

class HomeController extends Controller
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
    
    public function getLangPortuguese()
    {
        App::setLocale('pt_BR');

        Session::put('locale','pt_BR');

        return redirect()->back();
    }

    public function getLangEnglish()
    {   
        App::setLocale('en');

        Session::put('locale','en');
        
        return redirect()->back();
    }

    public function index()
    {   
        $locale = $locale = app()->getLocale();

        $menu_principal = $this->menu_principal($locale);

        $itens_dropdown = $this->itens_dropdown($locale);

        $menu_lateral = $this->menu_lateral($locale);

        $show_slides = $this->show_slides();

        $show_noticias = $this->show_noticias();

        return view('layouts.app', compact('menu_principal', 'itens_dropdown', 'menu_lateral', 'show_slides', 'show_noticias'));
    }
}