<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskuserTable extends Migration
{
    public function up()
    {
        Schema::create('task_user', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->id()->nullable(false);
          $table->foreignId('user_id')->unique()->constrained('users');
          $table->foreignId('task_id')->unique()->constrained('tasks');
          $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('taskuser');
    }
}
