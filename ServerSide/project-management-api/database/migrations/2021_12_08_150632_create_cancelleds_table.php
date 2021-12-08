<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelleds', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('title');
            $table->date('due_date');
            $table->text('description');
            $table->integer('assigned_to');
            $table->string('screenshot');
            $table->integer('tag_id');
            $table->boolean('isCompleted');
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
        Schema::dropIfExists('cancelleds');
    }
}
