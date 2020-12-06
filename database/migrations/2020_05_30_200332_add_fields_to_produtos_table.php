<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {

            $table -> string('nome', 100);
            $table -> text('descricao');
            $table -> decimal('preco', 8, 2);
            $table -> string('imagem');
            $table -> string('tipo');
            $table -> string('linha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {

            $table->dropColumn('nome');
            $table->dropColumn('descricao');
            $table->dropColumn('preco');
            $table->dropColumn('imagem');
            $table->dropColumn('tipo');
            $table->dropColumn('linha');

        });
    }
}
