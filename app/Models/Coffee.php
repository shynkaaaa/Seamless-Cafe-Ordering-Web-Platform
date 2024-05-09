<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $table = 'coffees';

    protected $fillable = ['name', 'price', 'description'];

    public function size(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function toppings(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Topping::class);
    }

    public function calculateTotalPrice()
    {
        $totalPrice = $this->price;


        if ($this->size) {
            $totalPrice += $this->size->price; // Assuming there's a price attribute in the Size model
        }

        // Add the price of each topping
        foreach ($this->toppings as $topping) {
            $totalPrice += $topping->price;
        }

        return $totalPrice;
    }

}

