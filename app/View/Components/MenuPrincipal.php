<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\MenuSite;

use App\Models\SubMenu;

use Session;

class MenuPrincipal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $locale = Session::get('locale');

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
        return view('components.menu-principal', compact('menu_principal', 'itens_dropdown'));
    }
}
