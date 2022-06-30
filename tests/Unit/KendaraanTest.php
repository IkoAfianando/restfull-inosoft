<?php

namespace Tests\Unit;

use App\Models\Kendaraan;
use PHPUnit\Framework\TestCase;

class KendaraanTest extends TestCase
{

    public function test_kendaraan()
    {
        $kendaraan = new Kendaraan();
        $kendaraan->tahun_keluaran = 2022-12-12;
        $kendaraan->warna = 'merah';
        $kendaraan->harga = 20000;
        $this->assertEquals(2022-12-12, $kendaraan->tahun_keluaran);
        $this->assertEquals('merah', $kendaraan->warna);
        $this->assertEquals('20000', $kendaraan->harga);
    }

    public function test_kendaraan_update()
    {
        $kendaraan = new Kendaraan();
        $kendaraan->tahun_keluaran = 2022-12-12;
        $kendaraan->warna = 'merah';
        $kendaraan->harga = 20000;
        $kendaraan->update(['tahun_keluaran' => '2022-12-12', 'warna' => 'merah', 'harga' => '20000']);
        $this->assertEquals(2022-12-12, $kendaraan->tahun_keluaran);
        $this->assertEquals('merah', $kendaraan->warna);
        $this->assertEquals('20000', $kendaraan->harga);
    }

    public function test_kendaraan_delete()
    {
        $kendaraan = new Kendaraan();
        $kendaraan->tahun_keluaran = 2022-12-12;
        $kendaraan->warna = 'merah';
        $kendaraan->harga = 20000;
        $kendaraan->delete();
        $this->assertEquals(2022-12-12, $kendaraan->tahun_keluaran);
        $this->assertEquals('merah', $kendaraan->warna);
        $this->assertEquals('20000', $kendaraan->harga);
    }

}
