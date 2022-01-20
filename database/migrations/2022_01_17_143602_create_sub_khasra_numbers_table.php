<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKhasraNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_khasra_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('khasra_number_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('khasra_number_id')
                ->references('id')
                ->on('khasra_numbers')
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
        Schema::dropIfExists('sub_khasra_numbers');
    }
}
