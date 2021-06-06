<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassageSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passage_salles', function (Blueprint $table) {
            $table->bigIncrements('idPSalle');
            $table->unsignedBigInteger('idV');
            $table->foreign('idV')
                ->references('idV')
                ->on('visiteurs')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('motifPS', 255);
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
        Schema::dropIfExists('passage_salles');
    }
}
