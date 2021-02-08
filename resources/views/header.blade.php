<link
href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
rel="stylesheet" id="bootstrap-css">
<script
src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script
src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="/home">Salvi Blog</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
		data-bs-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item"><a class="nav-link" aria-current="page"
				href="/home">Pagina Principal</a></li>
				<li class="nav-item"><a class="nav-link" href="/biografia">Biografia
				Autor</a></li>
				<li class="nav-item"><a class="nav-link" href="/listaLibros">Libros del autor</a></li>
				<li class="nav-item"><a class="nav-link" href="/sugerencias">Sugerencias</a>
				</li>
				<li class="nav-item"><a class="nav-link"
					href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
				{{ __('Cerrar sesion') }} </a></li>
			</ul>
		</div>
		<div class="d-flex justify-content-end">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item navbar-left text-secondary">
					{{Auth::user()->name}}
				</li>
			</ul>
		</div>
	</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST"
class="d-none">@csrf</form>

