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
        Schema::create('commercial_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->integer('commercial_type_id');
            $table->integer('area_id');
            $table->integer('city_id');
            $table->integer('size');
            $table->float('price', 8, 2);
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('commercial_type_id')->references('id')->on('commercial_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commercial_spaces');
    }
};
