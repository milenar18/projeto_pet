<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCachorroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cachorros', function (Blueprint $table) {
            $table->increments('id_cachorro');// Id da tabela (chave primária e incremento)
            $table->string('nome_tutor');// Nome da Tutor
            $table->string('end_tutor');// Endereço do Tutor
            $table->string('tel_tutor');// Telefone do Tutor
            $table->integer('idade_animal');// Idade do Animal
            $table->decimal('peso_animal');// Peso do Animal
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
        Schema::dropIfExists('cachorros');
    }
}
