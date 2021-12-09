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
            $table->foreignId('project_id')->constrained('projects');
            $table->foreignId('todo_id')->constrained('to_dos');
            $table->foreignId('working_on_id')->constrained('working_ons');
            $table->foreignId('pending_id')->constrained('pending_tasks');
            $table->foreignId('cancelled_id')->constrained('cancelleds'); 
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('discussion_id')->constrained('discussions');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('tag_id')->constrained('tags');
            $table->string('slug');
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
