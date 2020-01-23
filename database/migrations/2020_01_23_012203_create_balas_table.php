<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('body');
            $table->integer('question_id')->unsigned();
            $table->integer('user_id');
            $table->foreign('question_id')->references('id')->on('balas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balas');
    }
}
