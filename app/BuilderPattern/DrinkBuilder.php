<?php

namespace App\BuilderPattern;

interface DrinkBuilder
{
    public function addToppings(): void;

    public function addSize(): void;
}
