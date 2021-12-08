<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->integer('todo_id');
            $table->integer('working_on_id');
            $table->integer('pending_id');
            $table->integer('cancelled_id'); 
            $table->integer('post_id');
            $table->integer('user_id');
            $table->integer('discussion_id');
            $table->integer('category_id');
            $table->integer('tag_id');
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
        Schema::dropIfExists('activities');
    }
}
