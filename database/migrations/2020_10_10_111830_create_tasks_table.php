<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('due_date');
            $table->string('state');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('board_id')->constrained('boards');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
