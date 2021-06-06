<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReunionAmpliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunion_ampliations', function (Blueprint $table) {
            $table->bigIncrements('idR');
            $table->foreign('idR')
                ->references('idR')
                ->on('reunions')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idAmp');
            $table->foreign('idAmp')
                ->references('idAmp')
                ->on('ampliations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('reunion_ampliations');
    }
}
