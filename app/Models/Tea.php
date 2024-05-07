<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{

    protected $table = 'teas';

    protected $fillable = ['name', 'price', 'description'];

}
