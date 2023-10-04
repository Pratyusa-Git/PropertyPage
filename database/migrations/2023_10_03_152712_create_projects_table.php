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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('resident_type_id');
            $table->integer('no_of_bathroom');
            $table->integer('is_parking')->default(1); // 1: parking available 0: not available
            $table->float('min_price', 8, 2);
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('resident_type_id')->references('id')->on('residental_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
