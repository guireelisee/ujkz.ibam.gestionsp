<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionStandardesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription_standardes', function (Blueprint $table) {
            $table->bigIncrements('idIS');
            $table->unsignedBigInteger('idFiliere');
            $table->foreign('idFiliere')
                ->references('idFiliere')
                ->on('filieres')
                ->onDelete('restrict')
                ->onUpdate('restrict');
                $table->string('nomIS', 255);
                $table->string('prenomIS', 255);
                $table->date('anneeIS');
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
        Schema::dropIfExists('inscription_standardes');
    }
}
