<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            
                // $table->foreign('created_by')
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
        Schema::dropIfExists('containers');
    }
}
