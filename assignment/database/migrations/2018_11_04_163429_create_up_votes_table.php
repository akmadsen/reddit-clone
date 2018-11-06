<?php
/**
 * @author Alex Madsen
 * 
 * @date November 6, 2018
 */ 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('up_votes', function (Blueprint $table) {
            $table->unsignedInteger('user_id'); 
            $table->unsignedInteger('post_id');
            $table->primary(['user_id', 'post_id']);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('up_votes');
    }
}
