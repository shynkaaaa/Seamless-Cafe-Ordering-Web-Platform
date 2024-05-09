<?php

namespace App\BuilderPattern;

use App\Models\Coffee;
use App\Models\Size;
use App\Models\Topping;

class CoffeeBuilder implements DrinkBuilder
{
    private Coffee $drink;

    public function __construct()
    {
        $this->drink = new Coffee();
    }

    public function addToppings(): void
    {
        $toppings = Topping::all();
        $this->drink->toppings()->attach($toppings);
    }

    public function addSize(): void
    {
        $size = Size::where('name', 'Маленький')->first();
        $this->drink->size()->associate($size);
    }

    public function getResult(): Coffee
    {
        return $this->drink;
    }
}

