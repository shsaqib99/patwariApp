<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQanoongoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qanoongois', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tehsil_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('tehsil_id')
                ->references('id')
                ->on('tehsils')
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
        Schema::dropIfExists('qanoongois');
    }
}
