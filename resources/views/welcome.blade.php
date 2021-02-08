@extends('layout')
@section('content')
<div class="container-fluid m-5">
	<h1>Salvi Blog</h1>
	<div class="row">
		<div class=" col-md-8 col-12">


			@foreach ($posts as $post)
			<div class="col-12 mt-5" id="post">
				<h6>{{ $post->dateOfCreation }}</h6>
				<h2>{{ $post->title }}</h2>
				<div class="p-2">
					{{ $post->message }}
					<div class="mt-3">
						<span class="font-italic">Publicado por {{ $post->userName }} en  {{ $post->dateOfCreation }}</span>
					</div>
				</div>
			</div>
			<hr>
			@endforeach
		</div>
		<div class="col-4">
			@foreach ($administrators as $administrator)
			@if ($administrator->userName==Auth::user()->name)
			<a href="/crearpost">Crear Nuevo post</a>
		</div>
		@endif 
		@endforeach
	</div>
</div>
@stop