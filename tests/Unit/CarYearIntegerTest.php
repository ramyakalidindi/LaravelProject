<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;

class CarYearIntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearInteger()
    {

        $car = Car::find(10);
        $this->assertInternalType('numeric', $car->year);
    }
}
