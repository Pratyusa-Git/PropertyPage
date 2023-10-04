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
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->tinyInteger('is_featured')->default(0)->comment('0: not top; 1:top');
            $table->tinyInteger('is_recent')->default(0)->comment('0: not top; 1:top');
            $table->tinyInteger('is_popular')->default(0)->comment('0: not top; 1:top');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->dropColumn('is_featured');
            $table->dropColumn('is_recent');
            $table->dropColumn('is_popular');
        });
    }
};
