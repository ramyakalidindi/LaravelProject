<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;

class UserCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {

        $users = User::all();
        $users->count();
        $this->assertEquals(50, count($users));
    }
}
