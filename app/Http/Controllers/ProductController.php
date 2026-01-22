<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetailes;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        // $product = Product::all();
    //    $customer = User::where('user_type','customer')->get();
        // return view('product.home',['product'=>$product]);
        return view('product.add');
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
      $product->save();
      $ProductDetailes = new ProductDetailes();
      $ProductDetailes->price = $request->price;
      $ProductDetailes->quntity = $request->quntity;
      $ProductDetailes->madeIn = $request->madein;
      $ProductDetailes->img_url = $imagepath;
      $ProductDetailes->p = $request->p;
      $ProductDetailes->save();
      return redirect('/product');
    }
}
