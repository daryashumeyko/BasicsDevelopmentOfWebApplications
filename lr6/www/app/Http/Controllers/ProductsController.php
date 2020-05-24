<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

class ProductsController extends Controller
{
    public function index()
    {
	    if(\Cache::get('products')==null) 
        \Cache::put('products', Product::all());
	    $products = \Cache::get('products');
        return view('products', compact('products'));
    }
	
	public function delete($id)
	{
		Product::find($id)->delete();
		\Cache::put('products', null);
		return redirect()->intended('/');
	}
	
	public function add_products(Request $request)
	{
		$product = new Product();
		$product->name = $request->input('name');
		$product->description = $request->input('description');
		$product->photo = $request->input('photo');
		$product->price = (float)$request->input('price');
		$product->save();
		\Cache::put('products', null);
		return redirect()->intended('/');
	}
	
	public function addToCart($id, Request $request)
    {
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product);

		$request->session()->put('cart', $cart);
		$request->session()->save();
		return redirect()->intended('/');
    }

	public function showShoppingCart(Request $request){
		if (Session::has('cart')){
        $cart = $request->session()->get('cart');
        return view('shoppingCart', ['products'=> $cart->items, 'totalPrice' => $cart->totalPrice]);
      }
	}
}

