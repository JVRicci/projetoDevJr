<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable(table:'post_comments')){
        Schema::create('cadastros', function (Blueprint $table) {
            $table->id();
            //$table->integer('idCliente');
            $table->foreignId('idCliente')->references('id')->on('clientes');
            //$table->integer('idPlano');
            $table->foreignId('idPlano')->references('id')->on('planos');
            $table->date('fidelidadeInicio');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
};
