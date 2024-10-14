<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // <- quem bateu o ponto
            $table->string('latitude', 255); // <- localização
            $table->string('longitude', 255); // <- localização
            $table->tinyInteger('periodo');
            $table->dateTime('saida')->nullable();
            $table->string('ocorrencia',50)->nullable();
            $table->timestamps(); // <- que horas bateu o ponto
        });

        Schema::table('pontos', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pontos');
    }
};
