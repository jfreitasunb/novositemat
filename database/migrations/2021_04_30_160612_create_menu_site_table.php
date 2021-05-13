<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_site', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_menu', 100);
            $table->string('locale')->index();
            $table->unique(['id', 'locale']);
            $table->string('posicao',20);
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_site');
    }
}