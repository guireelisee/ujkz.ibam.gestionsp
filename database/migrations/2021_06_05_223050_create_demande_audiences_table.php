<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAudiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_audiences', function (Blueprint $table) {
            $table->bigIncrements('idDA');
            $table->unsignedBigInteger('idV');
            $table->foreign('idV')
                ->references('idV')
                ->on('visiteurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('motifDA', 255);
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
        Schema::dropIfExists('demande_audiences');
    }
}
