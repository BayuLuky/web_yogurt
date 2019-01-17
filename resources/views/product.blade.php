@extends('index')

@section('judul_halaman', '')

@section('konten')
	<div id="page">
		<div id="body">
			<div class="header">
				<div>
					<h1>Products</h1>
				</div>
			</div>
			<div>
				
			@foreach($product as $p)
				<ul>
					<li>
						<h1>{{$p->product_name}}</h1>
						<p>{{ $p->product_desc }}</p>
					</li>
					<li>
						<img src="{{ asset('uploads/'.$p->product_img)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
					</li>
					<li>
						<img src="{{ asset('uploads/'.$p->product_img)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
					</li>
					<li>
						<img src="{{ asset('uploads/'.$p->product_img)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
					</li>
				</ul>
			@endforeach
			</div>
		</div>
	</div>

@endsection