<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string('judul');
            $table ->text('ringkasan');
            $table ->integer('tahun');
            $table ->string('poster');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('film', function (Blueprint $table) {
            $table->dropForeign(['genre_id']);
            $table->dropColumn(['genre_id']);
            $table->dropColumn(['poster']);
            $table->dropColumn(['tahun']);
            $table->dropColumn(['ringkasan']);
            $table->dropColumn(['judul']);
            $table->dropColumn(['id']);
        });
    }
}
