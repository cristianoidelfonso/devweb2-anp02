<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); //criar a chave primaria chamada 'id'

            // Criando os campos da tabela no banco de dados
            // $table->tipo_do_campo('nome_do_campo', 'tamanho_do campo')
            $table->string('nome', 128)->unique();
            $table->integer('carga_horaria');
            $table->string('professor', 128);
            $table->decimal('preco', 8, 2);

            $table->timestamps(); //opcional, gerenciado pelo laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
