@extends('layout')
@section('content')
<div class="m-5">
	<h2>Crear Nuevo Post</h2>
	<form action="/crearpost" method="post">
		@csrf 
				<div class="form-row">
					<div class="col-12 p-4">
						<input type="text" class="form-control" id='title' name='title' placeholder="Nombre del post" required>
					</div>
					<div class="col-12 p-4">
						<textarea class="message-input form-control rounded-0" placeholder="Tu mensaje" id="message" name="message" rows="10"></textarea>
					</div>
				</div>
				<div class="p-4">
					<button type="submit" id="sendButton" class="btn font-weight-bold col-3" >Send</button>
				</div>
	</form>
</div>
@stop