<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|Kendaraan[]
     */
    public function index()
    {
        return Kendaraan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      $request->validate([
        'tahun_keluaran' => 'required',
        'warna' => 'required',
        'harga' => 'required',
      ]);
      return Kendaraan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return Kendaraan::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->update($request->all());
        return $kendaraan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete();
        return $kendaraan;
    }

    public function search($tahun_keluaran)
    {
        return Kendaraan::where('tahun_keluaran', 'like', '%' . $tahun_keluaran . '%')->get();
    }
}
