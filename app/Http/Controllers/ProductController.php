<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WishItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function showAllProducts()
    {
        $products = Product::paginate(2);
        $userId = Auth::id();
        $wishItems = WishItem::join('products', 'products.id', '=', 'wish_items.productId')
                    ->where('userId', '=', $userId)
                    ->get();
        return view('productListPage',
                        [
                            'products' => $products,
                            'wishItems' => $wishItems
                        ]);
    }
}
