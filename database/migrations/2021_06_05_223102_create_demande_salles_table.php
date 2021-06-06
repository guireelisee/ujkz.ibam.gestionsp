<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_salles', function (Blueprint $table) {
            $table->bigIncrements('idDS');
            $table->unsignedBigInteger('idV');
            $table->foreign('idV')
                ->references('idV')
                ->on('visiteurs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->dateTime('dateDepotDS');
            $table->string('destinataireDS', 255);
            $table->dateTime('dateOccupDS');
            $table->dateTime('dateFinDS');
            $table->string('motifDS', 255);
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
        Schema::dropIfExists('demande_salles');
    }
}
