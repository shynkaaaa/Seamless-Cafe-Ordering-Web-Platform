<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Tea;
use Illuminate\Http\JsonResponse;

class SingleItemPageController extends Controller
{
    public function show($type, $id): JsonResponse
    {
        switch ($type) {
            case 'coffee':
                $drink = Coffee::findOrFail($id);
                break;
            case 'tea':
                $drink = Tea::findOrFail($id);
                break;
            default:
                return response()->json(['error' => 'Invalid drink type'], 400);
        }

        $totalPrice = $drink->calculateTotalPrice();

        return response()->json(['drink' => $drink, 'total_price' => $totalPrice]);
    }
}
