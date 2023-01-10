<?php

namespace App\Http\Controllers;

use App\Models\WishItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishItemController extends Controller
{
    //
    public function showWishItem()
    {
        $userId = Auth::id();
        // $wishItems = WishItem::all();
        $wishItems = WishItem::join('products', 'products.id', '=', 'wish_items.productId')
                    ->where('userId', '=', $userId)
                    ->paginate(2);
        
        return view('wishList',['wishItems' => $wishItems]);
        
    }

    public function addWishProduct($id)
    {
        $wishItem = new WishItem();
        $wishItem->productId = $id;
        $wishItem->userId = Auth::id();
        $wishItem->save();

        // dd($wishItem);

        return redirect()->back();
    }

    public function removeWishProduct($id){
        $wishItem = WishItem::where('userId' , Auth::id())
                    ->where('productId', '=', $id);
        $wishItem->delete();
        return redirect()->back();
    }
}
