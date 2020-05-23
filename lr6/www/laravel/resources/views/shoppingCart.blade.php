@extends('layout')
@section('title', 'Shopping cart')
@section('content')
<div class="container products">
 <div class="colomn">
    <div>
        <h1>Корзина</h1>
		<br> <br>    
    </div>

    @foreach($products as $product)
    <div>
         <h4>{{ $product['item']['name'] }} - {{$product['quantity']}} </h4>
         <p>{{ \Illuminate\Support\Str::limit($product['item']['description'], 255) }}</p>
         <p>Price: {{$product['item']['price']}}$</p>
    </div>
    @endforeach
	
	<br> <br>
	<h3>Общая сумма - {{ $totalPrice }}$</h3>
	
 </div>
</div>
@endsection