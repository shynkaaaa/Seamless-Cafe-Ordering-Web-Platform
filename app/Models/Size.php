<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{

    protected $table = 'drink_sizes';

    protected $fillable = ['name', 'price'];

}
