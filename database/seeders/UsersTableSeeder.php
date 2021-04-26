<?php

namespace Database\Seeders;

use App\Models\Role;

use App\Models\RoleUsuario;

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_adminRole = Role::where('nome', 'super_admin')->first();

        $adminRole = Role::where('nome', 'admin')->first();

        $editorRole = Role::where('nome', 'editor')->first();

        User::truncate();

        $super_admin = User::create([
            'nome' => "José",
            'usuario' => "jfreitas",
            'email' => '1@mail.com',
            'password' => bcrypt('1'),
            'status' => 'ativo'
        ]);

        $admin = User::create([
            'nome' => "José",
            'usuario' => "jose",
            'email' => '2@mail.com',
            'password' => bcrypt('1'),
            'status' => 'ativo'
        ]);

        $editor = User::create([
            'nome' => "José",
            'usuario' => "jota",
            'email' => '3@mail.com',
            'password' => bcrypt('1'),
            'status' => 'ativo'
        ]);
        
        $super_admin->roles()->attach($super_adminRole);

        $admin->roles()->attach($adminRole);

        $editor->roles()->attach($editorRole);
    }
}
