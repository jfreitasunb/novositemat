<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use App\Models\MenuSite;

use App\Models\Institucional;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mews\Purifier\Purifier as PurifierPurifier;
use Purifier;

class GCInstitucionalController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {   
        $institucional = Institucional::where('locale', 'pt_BR')->orderBy('updated_at', 'DESC')->get()->first();

        if (is_null($institucional)) {
            $institucional_pt = null;
        }else{
            $institucional_pt = $institucional->institucional;
        }

        $institucional = Institucional::where('locale', 'en')->orderBy('updated_at', 'DESC')->get()->first();

        if (is_null($institucional)) {
            $institucional_en = null;
        }else{
            $institucional_en = $institucional->institucional;
        }

        return view('admin.institucional', compact('institucional_pt', 'institucional_en'));
    }

    public function atualizar_conteudo_institucional(Request $request)
    {
        $request->validate([
            'institucional_pt' => 'required',
            'institucional_en' => 'required',
        ]);

        $array['pt_BR'] = Purifier::clean(trim($request->institucional_pt));

        $array['en'] = Purifier::clean(trim($request->institucional_en));

        foreach (['en', 'pt_BR'] as $locale) {
            
            $dado = new Institucional();

            $dado->usuario_id = Auth::id();

            $dado->institucional = $array[$locale];

            $dado->locale = $locale;

            $dado->save();
        }

        return redirect()->route('gc');
    }

    // public function index()
    // {
    //     return view('admin.menus_site');
    // }

    // public function cadastrar_menu(Request $request)
    // {

    //     $request->validate([
    //         'texto_pt' => 'required|unique:menu_site,nome_menu',
    //         'texto_en' => 'required|unique:menu_site,nome_menu',
    //         'posicao_menu'  => 'required',
    //         'menu_ativo' => 'required',
    //     ]);

    //     $array['pt_BR'] = Purifier::clean(trim($request->texto_pt));

    //     $array['en'] = Purifier::clean(trim($request->texto_en));

    //     foreach (['en', 'pt_BR'] as $locale) {
            
    //         $menu = new MenuSite();

    //         $menu->nome_menu = $array[$locale];

    //         $menu->locale = $locale;

    //         $menu->posicao = Purifier::clean(trim($request->posicao_menu));

    //         $menu->ativo = (boolean)$request->menu_ativo;

    //         $menu->save();
    //     }

    //     return redirect()->route('menus.site');
    // }
}
