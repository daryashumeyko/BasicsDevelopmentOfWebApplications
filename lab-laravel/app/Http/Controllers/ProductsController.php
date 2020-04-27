<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
       $products = Product::all();
       return view('products', compact('products'));
    }
	
	public function delete($id)
	{
		Product::find($id)->delete();
		return redirect()->intended('/');
	}
	
	public function add_products(Request $req)
	{
		$product = new Product();
		$product->name = $req->input('name');
		$product->description = $req->input('description');
		$product->photo = $req->input('photo');
		$product->price = (float)$req->input('price');
		$product->save();
		return redirect()->intended('/');
	}
}

