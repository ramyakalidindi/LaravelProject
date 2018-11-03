<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = Car::find(10);
        $this->assertContains($car->Make, ["Ford", "Honda", "Toyota"]);
    }
}