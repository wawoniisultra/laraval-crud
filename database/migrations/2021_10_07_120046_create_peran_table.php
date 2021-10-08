<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');
            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('cast');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peran', function (Blueprint $table) {
            $table->dropForeign(['cast_id']);
            $table->dropColumn(['cast_id']);
            $table->dropForeign(['film_id']);
            $table->dropColumn(['film_id']);
            $table->dropColumn(['nama']);
            $table->dropColumn(['id']);
        });
    }
}
