<?php

namespace App\BuilderPattern;


interface DrinkBuilder
{
    public function addSize(): void;
    public function addToppings(): void;

}
