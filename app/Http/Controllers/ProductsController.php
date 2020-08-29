<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
   {
       $products = cache()->remember('homepage-main', 60*60*24, function() {
           return Product::all();
       });

       return view('products', compact('products'));
   }


    public function create()
   {
       return view('create_view');
   }

    public function db_create(Request $request)
   {
           $product = new Product;
           $product->name = $request->get('name');
           $product->description = $request->get('description');
           $product->photo = $request->get('photo');
           $product->price = $request->get('price');
           $product->save();
      }

    public function db_delete($id)
   {
       $product = Product::find($id);
      if ($product)
      $product->delete();
      return redirect()->route('index');
   }
}