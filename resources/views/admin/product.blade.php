@extends('admin.template')

@section('judul_halaman', '')

@section('konten')

<div class="container">
		<div class="card">
			<div class="card-body">
 
				<div class="form-group">
				</div>
                <a class="btn btn-danger btn-sm" href="/product_admin/tambah">Tambah Produk Baru</a>
				<br/>
				<br>
				<table class="table table-bordered">
					<tr>
						<th width="200px">Nama Product</th>
                        <th width="300px">Deskripsi Produk</th>
                        <th width="100px">Gambar Produk</th>
                        <th width="100px">Tanggal Produk</th>
                        <th width="150px">Opsi</th>
					</tr>
					@foreach($product as $p)
					<tr>
						<td>{{ $p->product_name }}</td>
                        <td>{{ $p->product_desc }}</td>
                        <td><img src="{{ asset('uploads/'.$p->product_img)  }}" style="max-height:100px;max-width:100px;margin-top:10px;"></td>
                        <td>{{ $p->product_date }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/product_admin/edit/{{ $p->product_id }}">Edit</a>
                            |
                            <a class="btn btn-danger btn-sm" href="/product_admin/hapus/{{ $p->product_id }}">Hapus</a>
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