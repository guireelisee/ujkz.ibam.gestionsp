<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_hebergements', function (Blueprint $table) {
            $table->bigIncrements('idDH');
            $table->unsignedBigInteger('idP');
            $table->foreign('idP')
                ->references('idP')
                ->on('personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idV');
            $table->foreign('idV')
                ->references('idV')
                ->on('visiteurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idTM');
            $table->foreign('idTM')
                ->references('idTM')
                ->on('type_missions')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('volumeHoraireDH')->unsigned()->nullable();
            $table->string('disciplineDH', 255)->nullable();
            $table->string('cadreDH', 255)->nullable();
            $table->string('departementDH', 255)->nullable();
            $table->dateTime('dateSoutenanceDH')->nullable();
            $table->string('themeSoutenanceDH', 255)->nullable();
            $table->string('autreMotifDH', 255)->nullable();
            $table->dateTime('dateDebutSejourDH');
            $table->dateTime('dateFinSejourDH');
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
        Schema::dropIfExists('demande_hebergements');
    }
}
