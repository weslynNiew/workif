<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('dia');
            $table->time('entrada_1')->nullable();
            $table->time('saida_1')->nullable();
            $table->time('entrada_2')->nullable();
            $table->time('saida_2')->nullable();
            $table->time('entrada_3')->nullable();
            $table->time('saida_3')->nullable();
        });

        DB::table('horarios')->insert([

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
