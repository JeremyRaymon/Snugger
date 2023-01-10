<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    //
    public function showCartItems()
    {
        $userId = Auth::id();
        //$cartItems = CartItem::all();
        $cartItems = CartItem::join('products', 'products.id', '=', 'cart_items.productId')
                    ->where('userId', '=', $userId)
                    ->get();
        return view('shoppingCart',['cartItems' => $cartItems]);
    }
}
