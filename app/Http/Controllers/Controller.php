<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\MenuSite;

use App\Models\SubMenu;

use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Increment slug
     *
     * @param   string $slug
     * @return  string
    **/


    public function menu_principal($locale)
    {
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

        return $menu_principal;
    }

    public function itens_dropdown($locale)
    {   
        $menu_superior = MenuSite::where('locale', $locale)->where('posicao', 'superior')->where('ativo', True)->orderBy('ordem_menu')->get();

        $menu_principal = [];

        foreach ($menu_superior as $menu) {

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

        return $itens_dropdown;
    }

    public function menu_lateral($locale)
    {
        $menu_lateral = MenuSite::where('locale', $locale)->where('posicao', 'lateral')->where('ativo', True)->orderBy('ordem_menu')->get();
        return $menu_lateral;
    }

    public function show_slides()
    {
        return True;
    }

    public function show_noticias()
    {
        return True;
    }

    public function incrementSlug($slug){
        // get the slug of the latest created post
        $max = static::whereTitle($this->title)->latest('id')->skip(1)->value('slug');

        if (is_numeric($max[-1])) {
            return pred_replace_callback('/(\d+)$/', function ($mathces) {
                return $mathces[1] + 1;
            }, $max);
        }

        return "{$slug}-2";
    }

    /**
     * Set the proper slug attribute.
     *
     * @param string $value
    */

    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = str_slug($value))->exists()) {
            $slug = $this->incrementSlug($slug);
        }
        
        $this->attributes['slug'] = $slug;
    }
}
