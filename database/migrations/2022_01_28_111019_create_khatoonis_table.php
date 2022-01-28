<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhatoonisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khatoonis', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('khaivet_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('khaivet_id')
                ->references('id')
                ->on('khaivets')
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
        Schema::dropIfExists('khatoonis');
    }
}
