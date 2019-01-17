<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mobile.css')}}">
	<script src="{{asset('js/mobile.js')}}" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="/yogurt" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="/yogurt">Home</a>
					</li>
					<li class="menu">
                        <a href="/tentang">About</a>
						<ul class="primary">
							<li>
                                <a href="/product">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu">
                        <a href="/blog">Blog</a>
						<ul class="secondary">
							<li>
                                <a href="/singlepost">Single post</a>
							</li>
						</ul>
					</li>
					<li>
                        <a href="/kontak">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		
		<h3>@yield('judul_halaman')</h3>

		@yield('konten')
		
		</div>
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
