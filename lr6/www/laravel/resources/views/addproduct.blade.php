@extends('layout')
@section('title', 'addproduct')
@section('content')

<form action="/addproduct" method="post">
	@csrf
	<div>
		<p><strong>Заполните данные о товаре:</strong></p>
		<p><strong>Название:</strong>
			<input name="name" type="text" id="name" class="form-control" required>
		</p>
		<p><strong>Описание: </strong>
			<textarea name="description"  id="description" class="form-control" required></textarea></p>
		<p><strong>url фото: </strong>
			<input name="photo" type="text" id="photo" class="form-control" required>
		</p>
		<p><strong>Цена: </strong>
			<input name="price" type="text"  id="price" class="form-control" required>
		</p>
		<button type="submit" class="btn btn-warning btn-block text-center">Добавить товар</button>
	</div>
</form>
@endsection