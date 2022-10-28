<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CustomProducts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_content');
            $table->integer('id_product');
            $table->string('cost_center');
            $table->string('content');
            $table->integer('quantity');
            $table->decimal('value');
            $table->foreign('id_content')
                ->references('id_declaracao')->on('contents')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('CustomProducts');
    }
}
