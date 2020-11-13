<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
