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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_di_partenza', 30);
            $table->string('stazione_di_arrivo', 30);
            $table->string('orario_di_partenza', 20);
            $table->string('orario_di_arrivo', 20);
            $table->string('codice_treno', 20);
            $table->tinyInteger('numero_carrozze', );
            $table->boolean('in_orario', 50);
            $table->boolean('cancellato', 50);
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
        Schema::dropIfExists('trains');
    }
};
