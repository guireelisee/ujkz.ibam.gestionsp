<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCessationServiceAmpliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cessation_service_ampliations', function (Blueprint $table) {
            $table->bigIncrements('idCS');
            $table->foreign('idCS')
                ->references('idCS')
                ->on('cessation_services')
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
        Schema::dropIfExists('cessation_service_ampliations');
    }
}
