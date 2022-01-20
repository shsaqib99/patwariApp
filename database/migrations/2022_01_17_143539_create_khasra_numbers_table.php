<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhasraNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khasra_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('murabba_number_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('murabba_number_id')
                ->references('id')
                ->on('murabba_numbers')
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
        Schema::dropIfExists('khasra_numbers');
    }
}
