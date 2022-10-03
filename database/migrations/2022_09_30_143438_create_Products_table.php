<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produto');
            $table->unsignedBigInteger('id_registro');
            $table->unsignedBigInteger('id_empresa');
            $table->string('conteudo');
            $table->timestamps();
            //$table->primary(['id_produto','id_empresa']);
            $table->foreign('id_registro')->references('id_declaracao')->on('contents')
            ->onUpdate('cascade')->onDelete('cascade');
            
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
