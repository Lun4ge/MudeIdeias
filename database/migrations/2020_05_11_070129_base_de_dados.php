<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaseDeDados extends Migration
{
    public function up()
    {
         // https://www.lucidchart.com/pages/

        Schema::create('contactos',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('titulo');
            $table->text('mensagem'); 
            $table->timestamps();
        });

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Schema::create('orcamentosPedidos',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->BigInteger('userid')->unsigned();
            $table->string('estado');
            $table->string('titulo');
            $table->text('mensagem'); 
            $table->timestamps();

            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('imagensPedidos',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->BigInteger('orcamentoid')->unsigned();
            $table->string('imagem'); 
            $table->timestamps();

            $table->foreign('orcamentoid')->references('id')->on('orcamentosPedidos')->onDelete('cascade');
        });

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Schema::create('orcamentosEnviados',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->BigInteger('pedidoid')->unsigned();
            $table->string('titulo');
            $table->text('mensagem');
            $table->string('preco');
            $table->timestamps();

            $table->foreign('pedidoid')->references('id')->on('orcamentosPedidos')->onDelete('cascade');
        });

        Schema::create('imagensEnviados',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->BigInteger('orcamentoid')->unsigned();
            $table->string('imagem'); 
            $table->timestamps();

            $table->foreign('orcamentoid')->references('id')->on('orcamentosEnviados')->onDelete('cascade');
        });
        
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Schema::create('marcas',function (Blueprint $table){
    $table->bigIncrements('id');
    $table->string('nome');
    $table->timestamps();
});

Schema::create('portfolios',function (Blueprint $table){
    $table->bigIncrements('id');
    $table->string('tipo');
    $table->string('estado');
    $table->BigInteger('marcaid')->nullable()->unsigned();
    $table->string('imagem');
    $table->timestamps();

    $table->foreign('marcaid')->references('id')->on('marcas')->onDelete('cascade');
});

    }

    public function down()
    {
        Schema::dropIfExists('contactos');
        Schema::dropIfExists('orcamentosPedidos');
        Schema::dropIfExists('imagensPedidos');
        Schema::dropIfExists('orcamentosEnviados');
        Schema::dropIfExists('imagensEnviados');
        Schema::dropIfExists('portfolio');
        Schema::dropIfExists('marcas');
    }
}
