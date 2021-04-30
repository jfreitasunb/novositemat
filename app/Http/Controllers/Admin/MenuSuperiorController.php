<?php

namespace App\Http\Controllers\Admin;

use App\Models\MenuSuperior;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Purifier;

class MenuSuperiorController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.menu_superior');
    }

    public function cadastrar_menu(Request $request)
    {
        $request->validate([
            'texto_pt' => 'required',
            'texto_en' => 'required'
        ]);

        $array['pt_br'] = Purifier::clean(trim($request->texto_pt));

        $array['en'] = Purifier::clean(trim($request->texto_en));

        foreach (['en', 'pt_br'] as $locale) {
            
            $menu = new MenuSuperior();

            $menu->nome_menu = $array[$locale];

            $menu->locale = $locale;

            $menu->save();
        }

        return redirect()->route('menu.superior');
    }
}
