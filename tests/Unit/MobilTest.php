<?php

namespace Tests\Unit;

use App\Models\Mobil;
use PHPUnit\Framework\TestCase;

class MobilTest extends TestCase
{
    public function test_mobil()
    {
        $mobil = new Mobil();
        $mobil->mesin = 'Aston Martin';
        $mobil->kapasitas_penumpang = 200;
        $mobil->tipe = 'SUV';
        $this->assertEquals('Aston Martin', $mobil->mesin);
        $this->assertEquals( 200, $mobil->kapasitas_penumpang);
        $this->assertEquals('SUV', $mobil->tipe);
    }

    public function test_mobil_update()
    {
        $mobil = new Mobil();
        $mobil->mesin = 'Aston Martin';
        $mobil->kapasitas_penumpang = 200;
        $mobil->tipe = 'SUV';
        $mobil->update(['mesin' => 'Aston Martin', 'kapasitas_penumpang' => 200, 'tipe' => 'SUV']);
        $this->assertEquals('Aston Martin', $mobil->mesin);
        $this->assertEquals(200, $mobil->kapasitas_penumpang);
        $this->assertEquals('SUV', $mobil->tipe);
    }

    public function test_mobil_delete()
    {
        $mobil = new Mobil();
        $mobil->mesin = 'Aston Martin';
        $mobil->kapasitas_penumpang = 200;
        $mobil->tipe = 'SUV';
        $mobil->delete();
        $this->assertEquals('Aston Martin', $mobil->mesin);
        $this->assertEquals(200, $mobil->kapasitas_penumpang);
        $this->assertEquals('SUV', $mobil->tipe);
    }

}
