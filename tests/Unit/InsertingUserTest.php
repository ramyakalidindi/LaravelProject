<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class InsertingUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertingUser()
    {

        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ['id' => $user->id]);
    }
}
