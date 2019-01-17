@extends('admin.template')

@section('judul_halaman', '')

@section('konten')

<div class="container">
		<div class="card">
			<div class="card-body">
 
				<div class="form-group">
				</div>
                <a class="btn btn-danger btn-sm" href="/blog_admin/tambah">Tambah Produk Baru</a>
				<br/>
				<br>
				<table class="table table-bordered">
					<tr>
						<th width="200px">Nama Blog</th>
                        <th width="300px">Deskripsi Blog</th>
                        <th width="100px">Gambar Blog</th>
                        <th width="100px">Tanggal Blog</th>
                        <th width="150px">Opsi</th>
					</tr>
					@foreach($blog as $p)
					<tr>
						<td>{{ $p->blog_name }}</td>
                        <td>{{ $p->blog_desc }}</td>
                        <td><img src="{{ asset('uploads/'.$p->blog_img)  }}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
                        <td>{{ $p->blog_date }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/blog_admin/edit/{{ $p->blog_id }}">Edit</a>
                            |
                            <a class="btn btn-danger btn-sm" href="/blog_admin/hapus/{{ $p->blog_id }}">Hapus</a>
                        </td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
<br>
<br>
<br>
@endsection