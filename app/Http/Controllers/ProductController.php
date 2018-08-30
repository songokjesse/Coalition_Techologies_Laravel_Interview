<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function store(Request $request)
 {
//    Reference https://arjunphp.com/laravel-create-a-json-file-and-append-content-to-it/
     // my data storage location is project_root/storage/app/data.json file.
     $storeAt = Storage::disk('local')->exists('data.json') ? json_decode(Storage::disk('local')->get('data.json')) : [];

     $product = $request->all();


     array_push($storeAt,$product);

     Storage::disk('local')->put('data.json', json_encode($storeAt));


     $request->session()->flash('alert-success', 'Product was successful added!');
     return redirect()->back();


 }
}
