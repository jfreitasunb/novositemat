<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuSite;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Purifier;

class MenuSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.menus_site');
    }

    public function cadastrar_menu(Request $request)
    {
        dd($request);
        
        $request->validate([
            'texto_pt' => 'required',
            'texto_en' => 'required'
        ]);

        $array['pt_br'] = Purifier::clean(trim($request->texto_pt));

        $array['en'] = Purifier::clean(trim($request->texto_en));

        foreach (['en', 'pt_br'] as $locale) {
            
            $menu = new MenuSite();

            $menu->nome_menu = $array[$locale];

            $menu->locale = $locale;

            $menu->save();
        }

        return redirect()->route('menu.menus_site');
    }
}
