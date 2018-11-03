<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginResponseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
