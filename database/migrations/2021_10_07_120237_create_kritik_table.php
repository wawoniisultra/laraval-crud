<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('isi');
            $table->integer('point');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kritik', function (Blueprint $table) {
            $table->dropForeign(['film_id']);
            $table->dropColumn(['film_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
            $table->dropColumn(['point']);
            $table->dropColumn(['isi']);
            $table->dropColumn(['id']);
        });
    }
}
