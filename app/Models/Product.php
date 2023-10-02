<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

       'category',
        'item_name',
        'item_price',
        'item_quantity',
        'total_price', 
    ];
}
