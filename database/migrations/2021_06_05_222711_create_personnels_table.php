<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->bigIncrements('idP');
            $table->string('matriculeP')->unique();
            $table->unsignedBigInteger('idCivilite');
            $table->foreign('idCivilite')
                    ->references('idCivilite')
                    ->on('civilites')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->string('nomP', 255);
            $table->string('prenomP', 255);
            $table->string('telephoneP', 255);
            $table->string('emailP', 255)->unique()->nullable();
            $table->unsignedBigInteger('idTitreP');
            $table->foreign('idTitreP')
                ->references('idTitreP')
                ->on('titre_personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idFP');
            $table->foreign('idFP')
                ->references('idFonctionP')
                ->on('fonction_personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idTP');
            $table->foreign('idTP')
                ->references('idTP')
                ->on('type_personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('serviceP', 255)->nullable();
            $table->dateTime('dateNaissanceP');
            $table->dateTime('dateRetraiteP');
            $table->string('motifPServ', 255);
            $table->dateTime('datePServ');
            $table->string('motifFServ')->nullable();
            $table->dateTime('dateFServ')->nullable();
            $table->boolean('statut')->nullable();
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
        Schema::dropIfExists('personnels');
    }
}
