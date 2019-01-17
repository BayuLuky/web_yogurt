<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frozen Yogurt Shop</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mobile.css')}}">
	<script src="{{asset('js/mobile.js')}}" type="text/javascript"></script>
</head>
<body>

	<div id="page">
		<div id="header">
			<div>
				<a href="/admin" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="/product_admin">Produk</a>
					</li>
					<li class="selected">
						<a href="/blog_admin">Blog</a>
					</li>
				</ul>
			</div>
		</div>
        
		<h3>@yield('judul_halaman')</h3>

		@yield('konten')
		
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
