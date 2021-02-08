@extends('layout') @section('content')
<div class="m-5">
<h1 class="mb-4">Libros publicados</h1>
<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">Autor</th>
			<th scope="col">Titulo</th>
			<th scope="col">Editorial</th>
			<th scope="col"></th>
		</tr>
	</thead>
	<tbody>
		@foreach ($books as $book)
		<tr>
			<th scope="col">{{ $book->autor }}</th>
			<th scope="col" >{{ $book->titulo }}</th>
			<th scope="col">{{ $book->editorial }}</th>
			<th scope="col">
				<form action="/detalleslibro" method="post">
				@csrf 
				<input type="hidden" id='id' name='id' value='{{ $book->id }}' required>
				<input type="submit" class="btn bg-success " value="Ver detalles">
				</form>
			</th>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@stop
