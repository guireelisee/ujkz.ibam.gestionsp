<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBordereausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bordereaus', function (Blueprint $table) {
            $table->bigIncrements('idB');
            $table->unsignedBigInteger('idP');
            $table->foreign('idP')
                ->references('idP')
                ->on('personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->text('naturePieceB');
            $table->integer('nombrePieceB')->unsigned();
            $table->text('observationB');
            $table->string('destinataireB', 255);
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
        Schema::dropIfExists('Bordereaus');
    }
}
