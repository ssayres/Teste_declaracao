<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->unsignedBigInteger('id_declaracao');
            //$table->unsignedBigInteger('enterprise_id');
            //$table->unsignedBigInteger('id_empresa_cliente');
            $table->unsignedBigInteger('id_user');
            $table->string('remetente');
            $table->string('cnpj');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('uf');
            $table->string('destinatario');
            $table->string('cnpj2');
            $table->string('cep2');
            $table->string('endereco2');
            $table->string('numero2');
            $table->string('complemento2');
            $table->string('cidade2');
            $table->string('uf2');
            $table->integer('idProduct');
            $table->string('cCusto');
            $table->string('content');
            $table->string('quantity');
            $table->decimal('value');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            
            
            
            //'id_empresa_cliente'
        $table->primary(['id_declaracao', 'id_user']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
