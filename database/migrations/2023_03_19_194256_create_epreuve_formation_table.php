<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epreuve_formation', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('epreuve_id')->primary();
            $table->foreign('epreuve_id')->references('id')->on('epreuves')->onDelete('cascade');
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
        });

        Schema::table('examens', function (Blueprint $table){
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
            $table->unsignedBigInteger('epreuve_id');
            $table->foreign('epreuve_id')->references('id')->on('epreuves')->onDelete('cascade');
            $table->unsignedBigInteger('salle_id');
            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');
        });

        Schema::table('modifs', function (Blueprint $table){
            $table->unsignedBigInteger('examen_id');
            $table->foreign('examen_id')->references('id')->on('examens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epreuve_formation');
    }
};
