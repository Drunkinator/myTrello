<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardUsersTable extends Migration
{
    public function up()
    {
        Schema::create('board_user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->nullable(false);
            $table->foreignId('user_id')->unique()->constrained('users');
            $table->foreignId('board_id')->unique()->constrained('boards');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('board_users');
    }
}
