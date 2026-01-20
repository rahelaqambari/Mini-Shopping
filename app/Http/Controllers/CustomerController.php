<?php

namespace App\Http\Controllers;

use App\Events\customerevent;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        $customer = Customer::all();
    //    $customer = User::where('user_type','customer')->get();
        return view('customer.home',['customer'=>$customer]);
    }
    public function create(Request $request){
        $request->validate([
            "name"=>"required|min:3|max:12",
            "lastName"=>"required|min:5|max:20",
            "email"=>"required|min:7",
            "image"=>"nullable|mimes:png,jpg,jpeg,gif"
        ]);
        $imagepath = null;
        if($request->hasFile('image')){
            $imagepath = $request->file('image')->store('img','public');
        }
      $customer = new Customer(); 
      $customer->name = $request->name;
      $customer->lastName = $request->lastName;
      $customer->email = $request->email;
      $customer->gender = $request->gender;
      $customer->img_url = $imagepath;
      event( new customerevent(customer: $customer));
      $customer->save();
      return redirect('/customer');
    }
}
