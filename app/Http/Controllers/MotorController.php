<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{

    public function index()
    {
        return Motor::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'mesin' => 'required',
            'tipe_suspensi' => 'required',
            'tipe_transmisi' => 'required',
        ]);

        return Motor::create($request->all());
    }

    public function show($id)
    {
        return Motor::find($id);
    }

    public function update(Request $request, $id)
    {
        $motor = Motor::find($id);
        $motor->update($request->all());
        return $motor;
    }

    public function destroy($id)
    {
        $motor = Motor::find($id);
        $motor->delete();
        return $motor;
    }

    public function search($mesin)
    {
        return Motor::where('mesin', 'like', '%' . $mesin . '%')->get();
    }


}
