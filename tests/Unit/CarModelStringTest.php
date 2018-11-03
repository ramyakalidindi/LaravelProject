<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;

class CarModelStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelString()
    {

        $car = Car::find(10);
        $this->assertInternalType('string', $car->Model);
    }
}
