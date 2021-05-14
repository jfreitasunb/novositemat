<?php

namespace Database\Seeders;

use App\Models\MenuSite;

use App\Models\SubMenu;

use Illuminate\Database\Seeder;


class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        SubMenu::truncate();

        $cursos_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Undergraduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "Courses",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/undergraduate/courses',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $cursos_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Cursos",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/graduacao/cursos',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $coord_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Undergraduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "Coordinators",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/undergraduate/coordinators',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $coord_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Coordenação",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/graduacao/coordenacao',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $coord_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Undergraduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "E-mural",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/undergraduate/emural',
            'ordem_menu' => 3,
            'ativo' => True
        ]);

        $coord_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "E-mural",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/graduacao/emural',
            'ordem_menu' => 3,
            'ativo' => True
        ]);

        $prog_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Undergraduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "Scholarships",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/undergraduate/scholarships',
            'ordem_menu' => 4,
            'ativo' => True
        ]);

        $prog_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Programas Institucionais",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/graduacao/programas-institucionais',
            'ordem_menu' => 4,
            'ativo' => True
        ]);

        $pos_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "About",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/graduate/about',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $pos_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pós Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Sobre",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/graduacao/sobre',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $master_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "Master",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/graduate/master',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $master_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pós Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Mestrado",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pos-graduacao/mestrado',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $phd_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "PhD",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/graduate/phd',
            'ordem_menu' => 3,
            'ativo' => True
        ]);

        $phd_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pós Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Doutorado",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pos-graduacao/doutorado',
            'ordem_menu' => 3,
            'ativo' => True
        ]);

        $profmat_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "Profmat",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/graduate/profmat',
            'ordem_menu' => 4,
            'ativo' => True
        ]);

        $profmat_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pós Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Profmat",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pos-graduacao/profmat',
            'ordem_menu' => 4,
            'ativo' => True
        ]);

        $insc_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Graduate')->where('locale', 'en')->first()->id,
            'nome_menu' => "Admission",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/graduate/admission',
            'ordem_menu' => 5,
            'ativo' => True
        ]);

        $insc_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pós Graduação')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Inscrições",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pos-graduacao/inscricoes',
            'ordem_menu' => 5,
            'ativo' => True
        ]);

        $publi_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Research')->where('locale', 'en')->first()->id,
            'nome_menu' => "Publications",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/research/publications',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $publi_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pesquisa')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Publicações",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pesquisa/publicacoes',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $areas_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Research')->where('locale', 'en')->first()->id,
            'nome_menu' => "Research Areas",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/research/research-areas',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $areas_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Pesquisa')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Linhas de Pesquisa",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pesquisa/linhas-de-pesquisa',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $sub_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Service and Outreach')->where('locale', 'en')->first()->id,
            'nome_menu' => "Documents",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/service-and-outreach/documents',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $sub_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Extensão')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Submissão de propostas",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/extensao/submissao-de-propostas',
            'ordem_menu' => 1,
            'ativo' => True
        ]);

        $proj_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Service and Outreach')->where('locale', 'en')->first()->id,
            'nome_menu' => "Projects",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/service-and-outreach/projects',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $proj_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Extensão')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Programa/Projetos/Ações",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/extensao/programa-projetos-acoes',
            'ordem_menu' => 2,
            'ativo' => True
        ]);

        $cont_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Service and Outreach')->where('locale', 'en')->first()->id,
            'nome_menu' => "Contact us",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/service-and-outreach/contact-us',
            'ordem_menu' => 3,
            'ativo' => True
        ]);

        $cont_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Extensão')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Fale Conosco",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/extensao/fale-conosco',
            'ordem_menu' => 3,
            'ativo' => True
        ]);

        $about_en = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Service and Outreach')->where('locale', 'en')->first()->id,
            'nome_menu' => "About",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/service-and-outreach/about',
            'ordem_menu' => 4,
            'ativo' => True
        ]);

        $about_pt = SubMenu::create([
            'menus_site_id' => MenuSite::where('nome_menu', 'Extensão')->where('locale', 'pt_BR')->first()->id,
            'nome_menu' => "Sobre a Extensão",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/extensao/sobre-a-extensao',
            'ordem_menu' => 4,
            'ativo' => True
        ]);   
    }
}
