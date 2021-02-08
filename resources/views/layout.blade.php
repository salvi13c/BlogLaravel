<html>
<style type="text/css">
footer{
   position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
}
</style>
<header>
@include('header')
</header>
<body>
	@yield('content')
</body>
<footer>
@include('footer')
</footer>
</html>