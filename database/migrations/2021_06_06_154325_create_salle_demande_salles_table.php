<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalleDemandeSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salle_demande_salles', function (Blueprint $table) {
            $table->bigIncrements('idSalle');
            $table->foreign('idSalle')
                ->references('idSalle')
                ->on('salles')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idDS');
            $table->foreign('idDS')
                ->references('idDS')
                ->on('demande_salles')
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
        Schema::dropIfExists('salle_demande_salles');
    }
}
