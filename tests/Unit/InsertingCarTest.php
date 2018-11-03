<?php

namespace Tests\Unit;

use Tests\TestCase;


class InsertingCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {

        $cars = factory(\App\Car::class)->create();
        $this->assertDatabaseHas('cars', ['Make' => $cars->Make]);
    }
}
