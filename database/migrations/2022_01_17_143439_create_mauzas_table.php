<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMauzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mauzas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patwar_circle_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('patwar_circle_id')
                ->references('id')
                ->on('patwar_circles')
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
        Schema::dropIfExists('mauzas');
    }
}
