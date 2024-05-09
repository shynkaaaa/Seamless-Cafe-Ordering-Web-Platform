<?php

namespace App\BuilderPattern;

use App\Models\Tea;
use App\Models\Size;
use App\Models\Topping;

class TeaBuilder implements DrinkBuilder
{
    private Tea $drink;

    public function __construct()
    {
        $this->drink = new Tea();
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

    public function getResult(): Tea
    {
        return $this->drink;
    }
}

