<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->bigIncrements('id')->unsigned();
            $table->string('nome', 50);
            $table->string('codigo', 10);
            $table->string('fabricante', 50);
            $table->string('preco', 50);
            $table->string('descricao', 100);
            $table->string('detalhes', 100);
            $table->string('img_path', 100)->nullable();
            $table->enum('ativo', ['S', 'N'])->default('S');
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
        Schema::dropIfExists('products');
    }
}
