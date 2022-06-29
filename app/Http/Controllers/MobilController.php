<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Mobil;
use Illuminate\Http\Request;


class MobilController extends Controller
{

    public function index()
    {
        return Mobil::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'mesin' => 'required',
            'kapasitas_penumpang' => 'required',
            'tipe' => 'required',
        ]);
        return Mobil::create([
            'mesin' => $request->mesin,
            'kapasitas_penumpang' => $request->kapasitas_penumpang,
            'tipe' => $request->tipe,
            'tahun_keluaran' => $request->tahun_keluaran,
            'warna' => $request->warna,
            'harga' => $request->harga,
        ]);
    }

    public function show($id)
    {
        return Mobil::find($id);
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
        return $mobil;
    }

    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return $mobil;
    }

}
