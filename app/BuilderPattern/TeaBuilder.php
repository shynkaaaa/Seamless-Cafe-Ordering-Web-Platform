<?php

namespace App\BuilderPattern;

use App\Models\Tea;

class TeaBuilder implements DrinkBuilder
{
    private Tea $drink;
    private array $requestData;

    public function __construct(array $requestData)
    {
        $this->drink = new Tea();
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

    public function getResult(): Tea
    {
        return $this->drink;
    }
}
