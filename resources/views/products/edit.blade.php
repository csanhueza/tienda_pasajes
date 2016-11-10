@extends('layouts.app');

@section("content")
	<div class="container white">
		<h1>Editar Producto</h1>
	@include('products.form',['product'=> $product, 'url' => '/products/'.$product->id, 'method' => 'PUT'])
	</div>
@endsection
<!--PUT Y PATCH DIFERENCIAS
PUT   = Es un reemplazo completo del objeto
PATCH = Edito el objeto existente
-->