<?php

namespace App\Http\Controllers;

use App\BuilderPattern\CoffeeBuilder;
use App\BuilderPattern\DrinkBuilder;
use App\BuilderPattern\TeaBuilder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SingleItemPageController extends Controller
{
    public function show(Request $request, $type): JsonResponse
    {
        $requestData = $request->all();

        switch ($type) {
            case 'coffee':
                $builder = new CoffeeBuilder($requestData);
                break;
            case 'tea':
                $builder = new TeaBuilder($requestData);
                break;
            default:
                return response()->json(['error' => 'Invalid drink type'], 400);
        }

        $drink = $this->buildDrink($builder);

        $totalPrice = $this->calculateTotalPrice($drink);

        return response()->json(['drink' => $drink, 'total_price' => $totalPrice]);
    }

    private function buildDrink(DrinkBuilder $builder)
    {
        $builder->addSize();
        $builder->addToppings();

        return $builder->getResult();
    }

    private function calculateTotalPrice($drink)
    {
        $totalPrice = $drink->price;

        if ($drink->size) {
            $totalPrice += $drink->size->price;
        }

        foreach ($drink->toppings as $topping) {
            $totalPrice += $topping->price;
        }

        return $totalPrice;
    }
}
