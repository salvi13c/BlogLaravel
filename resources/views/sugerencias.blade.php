@extends('layout')
@section('content')
<div class="m-5">
	<h1>Formulario de sugerencias</h1>
	<form action="/sugerencias" method="post">
		@csrf 
		<div class="form-row">
			<div class="col-md-6 col-12 p-4">
				<input type="text" class="form-control" id='name' name='name' placeholder="Nombre" required>
			</div>
			<div class="col-md-6 col-12 p-4">
				<input type="text" class="form-control" id='email' name='email' placeholder="Email" required>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-6 col-12 p-4">
				<input type="text" class="form-control" id='phone' name='phone' placeholder="Telefono" required>
			</div>
			<div class="col-md-6 col-12 p-4">
				<input type="text" class="form-control" id='subject' name='subject' placeholder="Asunto" required>
			</div>
			<div class="col-12 p-4">
				<textarea class="message-input form-control rounded-0" placeholder="Su mensaje" id="message" name="message" rows="10"></textarea>
			</div>
		</div>
		<div class="p-4">
			<button type="submit" id="sendButton" class="btn font-weight-bold col-3" >Send</button>
		</div>
	</form>
</div>
@stop