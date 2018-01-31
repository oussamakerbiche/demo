<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewproduct ()
    $Product = Product::all();
    $arr = Array ('product'=>$product);
    return('Products.view', $arr);
}
