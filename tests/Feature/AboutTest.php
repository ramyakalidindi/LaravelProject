<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;

class AboutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAboutPage()
    {

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)

            ->withSession(['foo' => 'bar'])

            ->get('/about');

        $response->assertStatus(200);
    }
}
