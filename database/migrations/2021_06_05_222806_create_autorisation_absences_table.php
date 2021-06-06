<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorisationAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorisation_absences', function (Blueprint $table) {
            $table->bigIncrements('idAA');
            $table->unsignedBigInteger('idP');
            $table->foreign('idP')
                ->references('idP')
                ->on('personnels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('motifAA', 255)->nullable();
            $table->string('destinataireAA', 255);
            $table->dateTime('dateDepartAA');
            $table->dateTime('dateRetourAA');
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
        Schema::dropIfExists('autorisation_absences');
    }
}
