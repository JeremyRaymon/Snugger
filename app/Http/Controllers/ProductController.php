<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showAllProducts()
    {
        $products = Product::paginate(2);
        return view('productListPage',['products' => $products]);
    }
}
