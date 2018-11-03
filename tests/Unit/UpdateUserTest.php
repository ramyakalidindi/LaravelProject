<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class UpdateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {

        $user = User::find(20);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users', ["name" => 'Steve Smith']);
    }
}
