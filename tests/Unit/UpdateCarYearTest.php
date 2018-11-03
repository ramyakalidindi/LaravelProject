<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;


class UpdateCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarYear()
    {
        $car = Car::find(1);
        $car->year = 2000;
        $car->save();
        $this->assertDatabaseHas('cars', ["id" => 1, "year" => 2000]);
    }
}
