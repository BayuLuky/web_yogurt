@extends('index')

@section('judul_halaman', '')

@section('konten')
	<div id="page">
		<div id="body">
			<div class="header">
				<div>
					<h1>Blog</h1>
				</div>
			</div>
			<div class="blog">
				<div class="featured">
					@foreach($blog as $p)
					<ul>
						<li>
							<img src="{{ asset('uploads/'.$p->blog_img)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
							<div>
								<h1>{{$p->blog_name}}</h1>
								<span>{{$p->blog_date}}</span>
								<p>{{ $p->blog_desc }}</p>
								<a href="/singlepost" class="more">Read More</a>
							</div>
						</li>
					</ul>
					@endforeach
				</div>
				<div class="sidebar">
				@foreach($blog->sortByDesc('blog_id')->take(1) as $p)
					<h1>Recent Posts</h1>
					<img src="{{ asset('uploads/'.$p->blog_img)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
					<h2>{{$p->blog_name}}</h2>
					<span>{{$p->blog_date}}</span>
					<p>{{ $p->blog_desc }}</p>
					<a href="/singlepost" class="more">Read More</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection