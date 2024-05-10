<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tea extends Model
{

    protected $table = 'teas';

    protected $fillable = ['name', 'price', 'description'];

    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function toppings(): BelongsToMany
    {
        return $this->belongsToMany(Topping::class, 'teas', 'id', 'id');
    }


}
