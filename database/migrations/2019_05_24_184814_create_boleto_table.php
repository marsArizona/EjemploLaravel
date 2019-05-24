<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boleto', function (Blueprint $table) {
            $table->increments('id_boleto');
            $table->unsignedInteger('evento_id');
            $table->string('qr');
            $table->integer('precio');


            $table->foreign('evento_id')
                    ->references('id_evento')
                    ->on('evento')->onDelete('cascade');
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
        Schema::dropIfExists('boleto');
    }
}
