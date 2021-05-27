<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\App;

use App\Models\MenuSite;

use App\Models\SubMenu;

use Session;


use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $locale = Session::get('locale');

        if (is_null($locale)) {
            $locale = app()->getLocale();
        }

        $menu_superior = MenuSite::where('locale', $locale)->where('posicao', 'superior')->where('ativo', True)->orderBy('ordem_menu')->get();

        $menu_principal = [];

        foreach ($menu_superior as $menu) {
            $menu_principal[$menu['id']]['id'] = $menu['id'];
            $menu_principal[$menu['id']]['nome_menu'] = $menu['nome_menu'];
            $menu_principal[$menu['id']]['link'] = $menu['link'];
            $menu_principal[$menu['id']]['dropdown'] = $menu['dropdown'];

            if ($menu['dropdown']) {

                $drop = SubMenu::where('menus_site_id', $menu['id'])->where('ativo', True)->orderBy('ordem_menu')->get();

                $i=0;
                foreach ($drop as $item) {
                    $itens_dropdown[$menu['id']][$i]['nome_menu'] = $item['nome_menu'];
                    
                    $itens_dropdown[$menu['id']][$i]['link'] = $item['link'];

                    $i++;
                }
            }
        }

        $menu_lateral = MenuSite::where('locale', $locale)->where('posicao', 'lateral')->where('ativo', True)->orderBy('ordem_menu')->get();

        $show_slides = False;

        View::share(compact('menu_principal', 'itens_dropdown', 'menu_lateral', 'show_slides'));
    }
}
