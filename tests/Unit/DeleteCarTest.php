<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $car = Car::find(1);
        $car->delete();
        $this->assertDatabaseMissing('cars', ['id' => '1']);
    }
}
