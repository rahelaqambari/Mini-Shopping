<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::all();
    //    $customer = User::where('user_type','customer')->get();
        return view('product.home',['product'=>$product]);
    }
    public function create(Request $request){
        // $request->validate([
        //     "name"=>"required|min:3|max:12",
        //     "price"=>"required|min:5|max:20",
        //     "quntity"=>"required|min:7",
        //     "image"=>"nullable|mimes:png,jpg,jpeg,gif"
        // ]);
        $imagepath = null;
        if($request->hasFile('image')){
            $imagepath = $request->file('image')->store('photoes','public');
        }
      $product = new Product(); 
      $product->name = $request->name;
      $product->price = $request->price;
      $product->quntity = $request->quntity;
      $product->img_url = $imagepath;
      $product->save();
      return redirect('/product');
    }
}
