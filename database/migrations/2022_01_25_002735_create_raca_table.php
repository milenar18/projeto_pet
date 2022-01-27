<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racas', function (Blueprint $table) {
            $table->increments('id_raca');// Id da tabela (chave primária e incremento)
            $table->string('raca');// Raças
            $table->integer('id_cachorro')->unsigned;// Chave Estrangeira da Tabela Cachorros
            $table->foreign('id_cachorro')->references('id_cachorro')->on('cachorros');// Raças
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
        Schema::dropIfExists('racas');
    }
}
