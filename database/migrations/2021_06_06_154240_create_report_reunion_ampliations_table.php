<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportReunionAmpliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_reunion_ampliations', function (Blueprint $table) {
            $table->unsignedBigInteger('idRR');
            $table->foreign('idRR')
                ->references('idRR')
                ->on('report_reunions')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idAmp');
            $table->foreign('idAmp')
                ->references('idAmp')
                ->on('ampliations')
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
        Schema::dropIfExists('report_reunion_ampliations');
    }
}
