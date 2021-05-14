<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('menus_site_id')->unsigned();
            $table->foreign('menus_site_id')->references('id')->on('menus_site')->onDelete('cascade');
            $table->string('nome_menu', 100);
            $table->string('locale')->index();
            $table->unique(['id', 'locale']);
            $table->string('posicao', 20);
            $table->string('link', 100);
            $table->integer('ordem_menu');
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
        Schema::dropIfExists('sub_menus');
    }
}
