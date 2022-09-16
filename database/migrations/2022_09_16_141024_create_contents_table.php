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
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('enterprise_id');
            $table->unsignedBigInteger('id_user');
            $table->string('content');
            $table->string('quantity');
            $table->decimal('value');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');

        $table->primary(['id_product', 'enterprise_id', 'id_user']);
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
