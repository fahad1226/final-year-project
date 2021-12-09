<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working__ons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('dute_date');
            $table->text('description');
            $table->boolean('isCompleted');
            $table->unsignedBigInteger('assigned_to');
            $table->foreign('assigned_to')->constrained()->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('working__ons');
    }
}
