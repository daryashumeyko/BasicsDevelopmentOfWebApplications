@extends('layout')
@section('title', 'Products')
@section('content')
<p class="btn-holder">
	<a href="{{ url('/add') }}" class="btn btn-warning btn-block text-center" role="button">Добавить товар</a>
	<a href="{{ url('/showShoppingCart')}}" class="btn btn-warning btn-block text-center" role="button">Перейти в корзину
    <span class="badge">{{Session::has('cart') ? Session::get('cart')->quantity : ''}}</span>
</a>
</p>
<div class="container products">
 <div class="row">
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="{{ $product->photo }}" width="220" height="270">
       <div class="caption">
         <h4>{{ $product->name }}</h4>
         <p>{{ strtolower($product->description)}}</p>
         <p><strong>Price: </strong> {{ $product->price }}$</p>
         <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" 
		 class="btn btn-warning btn-block text-center" role="button">Добавить товар в корзину</a> </p>
		 <p class="btn-holder"><a href="{{ url('delete/'.$product->id) }}" 
		 class="btn btn-warning btn-block text-center" role="button">Удалить товар</a></p>
	   </div>
     </div>
   </div>
   @endforeach
 </div>
</div>

@endsection
