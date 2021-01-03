<?php

namespace Tests\Unit\Database;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use App\Models\{Category, User, Task, Comment, Attachment, TaskUser};
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * Teste l'impossibilité d'assignation de tâche à un utilisateur absent du board
     *
     * @return void
     */
    public function testUserIsNotHere()
    {
        $user = User::factory()->create(); 
        $task = Task::factory()->create();

        $task_user = TaskUser::factory()->create(['task_id' => $task->id, 'user_id', $user->id]); 
        $task_user = new TaskUser(); 
        $task_user->user_id =  $user->id; 
        $task_user->task_id = $task->id; 
        $task_user->save(); 

        $this->assertDatabaseMissing('task_user', ['task_id' => $task->id, "user_id", $user->id]);

    }
}