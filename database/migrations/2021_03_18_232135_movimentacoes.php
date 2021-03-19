<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movimentacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacoes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('tipo', 5);
            $table->string('status', 5);
            $table->decimal('valor');
            $table->dateTime('data_movimentacao');

            $table->integer('usuario_id')->unsigned();
            $table->integer('categoria_id')->unsigned()->nullable();

            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
