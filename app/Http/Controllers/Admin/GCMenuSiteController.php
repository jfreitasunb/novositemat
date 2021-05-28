<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuSite;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mews\Purifier\Purifier as PurifierPurifier;
use Purifier;

class GCMenuSiteController extends Controller
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

        $request->validate([
            'texto_pt' => 'required|unique:menu_site,nome_menu',
            'texto_en' => 'required|unique:menu_site,nome_menu',
            'posicao_menu'  => 'required',
            'menu_ativo' => 'required',
        ]);

        $array['pt_BR'] = Purifier::clean(trim($request->texto_pt));

        $array['en'] = Purifier::clean(trim($request->texto_en));

        foreach (['en', 'pt_BR'] as $locale) {
            
            $menu = new MenuSite();

            $menu->nome_menu = $array[$locale];

            $menu->locale = $locale;

            $menu->posicao = Purifier::clean(trim($request->posicao_menu));

            $menu->ativo = (boolean)$request->menu_ativo;

            $menu->save();
        }

        return redirect()->route('menus.site');
    }
}
