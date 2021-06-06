<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->bigIncrements('idV');
            $table->unsignedBigInteger('idCivilite');
            $table->foreign('idCivilite')
                ->references('idCivilite')
                ->on('civilites')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nomV', 255);
            $table->string('prenomV', 255);
            $table->string('telephoneV', 255);
            $table->string('serviceV', 255);
            $table->string('emailV', 255);
            $table->string('provenanceV', 255)->nullable();
            $table->unsignedBigInteger('idTV');
            $table->foreign('idTV')
                ->references('idTitreV')
                ->on('titre_visiteurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('idFV');
            $table->foreign('idFV')
                ->references('idFonctionV')
                ->on('fonction_visiteurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('visiteurs');
    }
}
