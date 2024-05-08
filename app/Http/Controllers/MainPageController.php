<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
            $coffees = Coffee::all();

        return response()->json(['coffees' => $coffees]);
    }

    public function show($id)
    {
        $coffee = Coffee::findOrFail($id);

        return response()->json([
            'coffee' => [
                'id' => $coffee->id,
                'name' => $coffee->name,
                'price' => $coffee->price,
            ]
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);


        $coffee = Coffee::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);


        return response()->json(['coffee' => $coffee], 201);
    }

    public function update(Request $request, $id)
    {
        $coffee = Coffee::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $coffee->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return response()->json(['coffee' => $coffee]);
    }

    public function destroy($id)
    {
        $coffee = Coffee::findOrFail($id);
        $coffee->delete();

        return response()->json(['message' => 'Coffee deleted successfully']);
    }

}
