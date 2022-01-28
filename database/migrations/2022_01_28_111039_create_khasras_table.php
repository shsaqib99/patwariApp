<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhasrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khasras', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('khatooni_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('khatooni_id')
                ->references('id')
                ->on('khatoonis')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khasras');
    }
}
