<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['nome' => 'super_admin', 'descricao' => 'Pode tudo.']);
        Role::create(['nome' => 'amin', 'descricao' => 'Pode um pouco.']);
        Role::create(['nome' => 'editor', 'descricao' => 'Só edita.']);
        Role::create(['nome' => 'autor', 'descricao' => 'Só escreve.']);
    }
}
