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
        Schema::create('hero_weapons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hero_id')->references('id')->on('heroes');
            $table->foreignId('weapon_id')->references('id')->on('weapons');
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
        Schema::dropIfExists('hero_weapons');
    }
};
