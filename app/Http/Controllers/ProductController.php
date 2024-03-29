<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\WishItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function viewProducts(){
        $products = Product::all();

        return view('viewProductsAdmin', ['products'=>$products]);
    }

    public function view(){
        $products = Product::all();

        return view('InsertItem', ['products'=>$products]);
    }

    public function addProduct(Request $request){
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'img' => 'required',
            'category' => 'required',

        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator -> fails()){
            return back()-> withErrors($validator);
        }

        $file = $request -> file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Storage::putFileAs('public/images',$file, $fileName);

        $add = new Product();
        $add->img = $fileName;
        $add->name = $request->name;
        $add->name = $request->name;
        $add->desc = $request->desc;
        $add->category = $request->category;
        $add->save();

        return redirect()->back();
    }
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
