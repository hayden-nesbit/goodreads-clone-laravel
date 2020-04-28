<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShelvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelves', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('shelf_id');
            $table->text('type');
            // $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
                    // $table->foreign('book_id')
                    //     ->references('id')
                    //     ->on('books')
                    //     ->onDelete('cascade');
        
                    // $table->foreign('user_id')
                    //     ->references('id')
                    //     ->on('users')
                    //     ->onDelete('cascade');

                    // $table->foreign('shelf_id')
                    //     ->references('id')
                    //     ->on('shelves')
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
        Schema::dropIfExists('shelves');
    }
}
