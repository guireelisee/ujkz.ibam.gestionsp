<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterimCoordosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interim_coordos', function (Blueprint $table) {
            $table->bigIncrements('idIC');
            $table->unsignedBigInteger('idP');
            $table->foreign('idP')
                ->references('idP')
                ->on('personnels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('idFiliere');
            $table->foreign('idFiliere')
                ->references('idFiliere')
                ->on('filieres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->dateTime('dateDebutIC');
            $table->dateTime('dateFinIC');
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
        Schema::dropIfExists('interim_coordos');
    }
}
