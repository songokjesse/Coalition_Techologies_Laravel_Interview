<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['Product_name','Quantity_in_Stock','Price_per_item'];
}
