<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunions', function (Blueprint $table) {
            $table->bigIncrements('idR');
            $table->unsignedBigInteger('idTR');
            $table->foreign('idTR')
                    ->references('idTR')
                    ->on('type_reunions')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->date('dateR');
            $table->string('lieuR', 255)->default('IBAM');
            $table->string('ordreJour', 255)->nullable();
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
        Schema::dropIfExists('reunions');
    }
}
