@extends('layout') @section('content') @foreach ($books as $book)
<div class="container-fluid m-5">
	<div class="row">
		<div class="col-lg-4 col-12">
			<h2>{{ $book->titulo }}</h2>
			<ul>
				<li>Autor : {{ $book->autor }}</li>
				<li>Editorial : {{ $book->editorial }}</li>
				<li>Sinopsis : {{ $book->sinopsis }}</li>
				<li>Precio : {{ $book->precio }} $</li>
			</ul>
			<h5>Comprar Libro</h5>
			<form action="/comprarLibro" method="post">
				@csrf
				<div class="form-row">
					<input type="hidden" class="form-control" id='titulo'
					name='titulo' value='{{ $book->titulo }}' required> 
					<input type="hidden" class="form-control" id='editorial'
					name='editorial' value='{{ $book->editorial }}' required> 
					<input
					type="hidden" class="form-control" id='precio' name='precio' value='{{ $book->precio }}'
					required>
					<div class="col-12 p-4">
						<input type="number" class="form-control" id='cantidad'
						name='cantidad' placeholder="Cantidad" max="5" required>
					</div>
					<div class="col-12 p-4">
						<input type="text" class="form-control" id='direccion'
						name='direccion' placeholder="Direccion" required>
					</div>
					<div class="col-12 p-4">
						<input type="text" class="form-control" id='phone' name='phone'
						placeholder="telefono" required>
					</div>
				</div>
				<div class="p-4">
					<button type="submit" id="sendButton"
					class="btn font-weight-bold col-3">Send</button>
				</div>
			</form>
		</div>
		<div class="col-md-1 col-12">
		</div>
		<div class="col-md-4 col-12 mt-5">
			<img src="{{ $book->imagen_portada }}" alt="img" width="70%"></img>
		</div>
	</div>
	@endforeach @stop
