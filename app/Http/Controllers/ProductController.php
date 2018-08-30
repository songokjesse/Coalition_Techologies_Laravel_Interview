<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function store(Request $request)
 {
        $product = new Product();
        $product->Product_name = $request->Product_name;
        $product->Quantity_in_Stock = $request->Quantity_in_Stock;
        $product->Price_per_item = $request->Price_per_item;

        $product->save();
        return response()->json(['success'=>'Data is successfully added']);
 }
}
