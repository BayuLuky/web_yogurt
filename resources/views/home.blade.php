@extends('index')

@section('judul_halaman', '')

@section('konten')
    <div id="page">
		<div id="body" class="home">
			<div class="header">
				<img src="images/bg-home.jpg" alt="">
				<div>
					<a href="/product">Freeze Delight</a>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<h1>NEW PRODUCT</h1>
						<h2>The Twist of Healthy Yogurt</h2>
						<p>This website template has been designed by freewebsitetemplates.com for you, for free. You can replace all this text with your own text.</p>
					</div>
					<img src="images/yogurt.jpg" alt="">
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<a href="/product" class="product"></a>
							<h1>PRODUCTS</h1>
						</li>
						<li>
							<a href="/about" class="about"></a>
							<h1>OUR STORY</h1>
						</li>
						<li>
							<a href="/product" class="flavor"></a>
							<h1>FLAVORS</h1>
						</li>
						<li>
							<a href="/kontak" class="contact"></a>
							<h1>OUR LOCATION</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection