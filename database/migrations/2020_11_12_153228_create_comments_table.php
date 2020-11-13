<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('task_id')->constrained('tasks');
            $table->string('text');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
