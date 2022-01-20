<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatwarCirclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patwar_circles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('qanoongoi_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('qanoongoi_id')
                ->references('id')
                ->on('qanoongois')
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
        Schema::dropIfExists('patwar_circles');
    }
}
