<?php

namespace Tests\Unit;

use App\Models\Motor;
use PHPUnit\Framework\TestCase;

class MotorTest extends TestCase
{

    public function test_motor()
    {
        $motor = new Motor();
        $motor->mesin = 'Aston Martin';
        $motor->tipe_suspensi = 'Avant';
        $motor->tipe_transmisi = 'Manual';
        $this->assertEquals('Aston Martin', $motor->mesin);
        $this->assertEquals( 'Avant', $motor->tipe_suspensi);
        $this->assertEquals('Manual', $motor->tipe_transmisi);
    }

    public function test_motor_update()
    {
        $motor = new Motor();
        $motor->mesin = 'Aston Martin';
        $motor->tipe_suspensi = 'Avant';
        $motor->tipe_transmisi = 'Manual';
        $motor->update(['mesin' => 'Aston Martin', 'tipe_suspensi' => 'Avant', 'tipe_transmisi' => 'Manual']);
        $this->assertEquals('Aston Martin', $motor->mesin);
        $this->assertEquals('Avant', $motor->tipe_suspensi);
        $this->assertEquals('Manual', $motor->tipe_transmisi);
    }

    public function test_motor_delete()
    {
        $motor = new Motor();
        $motor->mesin = 'Aston Martin';
        $motor->tipe_suspensi = 'Avant';
        $motor->tipe_transmisi = 'Manual';
        $motor->delete();
        $this->assertEquals('Aston Martin', $motor->mesin);
        $this->assertEquals('Avant', $motor->tipe_suspensi);
        $this->assertEquals('Manual', $motor->tipe_transmisi);
    }

}
