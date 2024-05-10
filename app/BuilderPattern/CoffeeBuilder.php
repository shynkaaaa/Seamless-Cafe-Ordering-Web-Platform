<?php

namespace App\BuilderPattern;

use App\Models\Coffee;

class CoffeeBuilder implements DrinkBuilder
{
    private Coffee $drink;
    private array $requestData;

    public function __construct(array $requestData)
    {
        $this->drink = new Coffee();
        $this->requestData = $requestData;
    }

    public function addToppings(): void
    {
        $toppings = $this->requestData['toppings'] ?? [];
        $this->drink->toppings()->attach($toppings);
    }

    public function addSize(): void
    {
        $size = $this->requestData['size'];
        $this->drink->size()->associate($size);
    }

    public function getResult(): Coffee
    {
        return $this->drink;
    }
}
