<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('book_container', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id');
            // $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('container_id');
            $table->timestamps();

            $table->unique(['book_id', 'container_id']);

            $table->foreign('book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade');

            $table->foreign('container_id')
                ->references('id')
                ->on('containers')
                ->onDelete('cascade');

            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_container');
    }
}
