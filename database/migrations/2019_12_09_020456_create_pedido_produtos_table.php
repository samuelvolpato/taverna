<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('pedido_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->enum('status',['RE','PA','CA']);
            $table->decimal('valor',6,2)->default(0);
            $table->decimal('desconto',6,2)->default(0);
            $table->integer('cupom_desconto_id')->nullable()->unsigned();
            $table->foreign('produto_id')->references('id')->on('users');
            $table->foreign('pedido_id')->references('id')->on('users');
            $table->foreign('cupom_desconto_id')->references('id')->on('users');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_produtos');
    }
}
