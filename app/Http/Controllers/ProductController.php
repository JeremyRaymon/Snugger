<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function viewProducts(){
        $products = Product::paginate(5);
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

        $file = $request -> file('img');
        $fileName = time();
        Storage::putFileAs('public/images',$file, $fileName);

        $add = new Product();
        $add->img = $fileName;
        $add->name = $request->name;
        $add->price = $request->price;
        $add->desc = $request->desc;
        $add->category = $request->category;
        $add->save();

        return redirect()->back();
    }

    public function updateProduct(Request $request){
        $products = Product::find($request->id_update);
        $file = $request -> file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Storage::putFileAs('public/images',$file, $fileName);

        $products->img = $fileName;
        $products->name = $request->title;
        $products->price = $request->price;
        $products->desc = $request->desc;
        $products->category = $request->category;
        $products->save();

        return redirect()->back();
    }

    public function deleteProduct(Request $request){
        $products = Product::find($request->id);
        Storage::delete("public/images" . $products->img);
        $products->delete();
        return redirect()->back();
    }
}
