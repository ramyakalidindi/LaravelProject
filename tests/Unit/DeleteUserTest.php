<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {

        $user = User::find(1);
        $user->delete();
        $this->assertDatabaseMissing('users', ['id' => '1']);
    }
}
