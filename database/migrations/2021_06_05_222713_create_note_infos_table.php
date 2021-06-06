<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_infos', function (Blueprint $table) {
            $table->bigIncrements('idNI');
            $table->unsignedBigInteger('idP');
            $table->foreign('idP')
                ->references('idP')
                ->on('personnels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->unsignedBigInteger('idDNI');
            $table->foreign('idDNI')
                ->references('idDNI')
                ->on('destinataire_note_infos')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->longText('corpsNI');
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
        Schema::dropIfExists('note_infos');
    }
}
