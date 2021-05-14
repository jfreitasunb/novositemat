<?php

namespace Database\Seeders;

use App\Models\MenuSite;

use Illuminate\Database\Seeder;


class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        MenuSite::truncate();

        $home_en = MenuSite::create([
            'nome_menu' => "Home",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/home',
            'ordem_menu' => 1,
            'dropdown' => False,
            'ativo' => True
        ]);

        $home_pt = MenuSite::create([
            'nome_menu' => "Home",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/home',
            'ordem_menu' => 1,
            'dropdown' => False,
            'ativo' => True
        ]);

        $inst_en = MenuSite::create([
            'nome_menu' => "Institutional",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/institutional',
            'ordem_menu' => 2,
            'dropdown' => False,
            'ativo' => True
        ]);

        $inst_pt = MenuSite::create([
            'nome_menu' => "Institucional",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/institucional',
            'ordem_menu' => 2,
            'dropdown' => False,
            'ativo' => True
        ]);

        $grad_en = MenuSite::create([
            'nome_menu' => "Undergraduate",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/undergraduate',
            'ordem_menu' => 3,
            'dropdown' => True,
            'ativo' => True
        ]);

        $grad_pt = MenuSite::create([
            'nome_menu' => "Graduação",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/graduacao',
            'ordem_menu' => 3,
            'dropdown' => True,
            'ativo' => True
        ]);

        $pos_en = MenuSite::create([
            'nome_menu' => "Graduate",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/graduate',
            'ordem_menu' => 4,
            'dropdown' => True,
            'ativo' => True
        ]);

        $pos_pt = MenuSite::create([
            'nome_menu' => "Pós Graduação",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pos',
            'ordem_menu' => 4,
            'dropdown' => True,
            'ativo' => True
        ]);

        $pesquisa_en = MenuSite::create([
            'nome_menu' => "Research",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/research',
            'ordem_menu' => 5,
            'dropdown' => True,
            'ativo' => True
        ]);

        $pesquisa_pt = MenuSite::create([
            'nome_menu' => "Pesquisa",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pesquisa',
            'ordem_menu' => 5,
            'dropdown' => True,
            'ativo' => True
        ]);

        $ext_en = MenuSite::create([
            'nome_menu' => "Service and Outreach",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/service_and_outreach',
            'ordem_menu' => 6,
            'dropdown' => True,
            'ativo' => True
        ]);

        $ext_pt = MenuSite::create([
            'nome_menu' => "Extensão",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/extensao',
            'ordem_menu' => 6,
            'dropdown' => True,
            'ativo' => True
        ]);

        $pessoas_en = MenuSite::create([
            'nome_menu' => "People",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/people',
            'ordem_menu' => 7,
            'dropdown' => False,
            'ativo' => True
        ]);

        $pessoas_pt = MenuSite::create([
            'nome_menu' => "Pessoas",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/pessoas',
            'ordem_menu' => 7,
            'dropdown' => False,
            'ativo' => True
        ]);

        $contato_en = MenuSite::create([
            'nome_menu' => "Contact us",
            'locale' => "en",
            'posicao' => 'superior',
            'link' => '/contact_us',
            'ordem_menu' => 8,
            'dropdown' => False,
            'ativo' => True
        ]);

        $contato_pt = MenuSite::create([
            'nome_menu' => "Contato",
            'locale' => "pt_BR",
            'posicao' => 'superior',
            'link' => '/contato',
            'ordem_menu' => 8,
            'dropdown' => False,
            'ativo' => True
        ]);

        $news_en = MenuSite::create([
            'nome_menu' => "News",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/news',
            'ordem_menu' => 1,
            'dropdown' => False,
            'ativo' => True
        ]);

        $news_pt = MenuSite::create([
            'nome_menu' => "Notícias",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/noticias',
            'ordem_menu' => 1,
            'dropdown' => False,
            'ativo' => True
        ]);

        $seminarios_en = MenuSite::create([
            'nome_menu' => "Seminars",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/seminars',
            'ordem_menu' => 2,
            'dropdown' => False,
            'ativo' => True
        ]);

        $news_pt = MenuSite::create([
            'nome_menu' => "Seminários",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/seminarios',
            'ordem_menu' => 2,
            'dropdown' => False,
            'ativo' => True
        ]);

        $job_en = MenuSite::create([
            'nome_menu' => "Job Opportunities",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/job_opportunities',
            'ordem_menu' => 3,
            'dropdown' => False,
            'ativo' => True
        ]);

        $job_pt = MenuSite::create([
            'nome_menu' => "Concursos",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/concursos',
            'ordem_menu' => 3,
            'dropdown' => False,
            'ativo' => True
        ]);

        $eventos_en = MenuSite::create([
            'nome_menu' => "Events",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/events',
            'ordem_menu' => 4,
            'dropdown' => False,
            'ativo' => True
        ]);

        $eventos_pt = MenuSite::create([
            'nome_menu' => "Eventos",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/eventos',
            'ordem_menu' => 4,
            'dropdown' => False,
            'ativo' => True
        ]);

        $links_en = MenuSite::create([
            'nome_menu' => "Links and documents",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/links_and_documents',
            'ordem_menu' => 5,
            'dropdown' => False,
            'ativo' => True
        ]);

        $links_pt = MenuSite::create([
            'nome_menu' => "Links e Documentos",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/links_e_documentos',
            'ordem_menu' => 5,
            'dropdown' => False,
            'ativo' => True
        ]);

        $midia_en = MenuSite::create([
            'nome_menu' => "Midia MAT",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/midia_mat',
            'ordem_menu' => 6,
            'dropdown' => False,
            'ativo' => True
        ]);

        $midia_pt = MenuSite::create([
            'nome_menu' => "Mídia MAT",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/midia_mat',
            'ordem_menu' => 6,
            'dropdown' => False,
            'ativo' => True
        ]);

        $galeria_en = MenuSite::create([
            'nome_menu' => "Gallery",
            'locale' => "en",
            'posicao' => 'lateral',
            'link' => '/gallery',
            'ordem_menu' => 7,
            'dropdown' => False,
            'ativo' => True
        ]);

        $galeria_pt = MenuSite::create([
            'nome_menu' => "Galeria",
            'locale' => "pt_BR",
            'posicao' => 'lateral',
            'link' => '/galeria',
            'ordem_menu' => 7,
            'dropdown' => False,
            'ativo' => True
        ]);
    }
}
