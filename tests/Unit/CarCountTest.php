<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;

class CarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {

        $cars = Car::all();
        $this->assertEquals(50, count($cars));
    }
}
