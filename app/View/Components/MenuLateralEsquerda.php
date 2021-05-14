<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\MenuSite;

use Session;

class MenuLateralEsquerda extends Component
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

        $menu_lateral = MenuSite::where('locale', $locale)->where('posicao', 'lateral')->where('ativo', True)->orderBy('ordem_menu')->get();

        return view('components.menu-lateral-esquerda', compact('menu_lateral'));
    }
}
