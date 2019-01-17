@extends('admin.template')

@section('judul_halaman', '')

@section('konten')


<div class="container">
		<div class="card">
			<div class="card-body">
 
				<div class="form-group">
				</div>
                <a class="btn btn-danger btn-sm" href="/product_admin">Kembali</a>
				<br/>
				<br>
                @foreach($product as $p)
                <form action="/product_admin/update" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
                    <table class="table table-bordered">
                        <input type="hidden" name="id" value="{{ $p->product_id }}">
					    <tr>
                            <td>Nama Product</td> 
                            <td><input class="form-control" type="text" name="nama" required="required" value="{{ $p->product_name }}"></td>
                        </tr>

		                <tr>
                            <td>Deskripsi Produk</td> 
                            <td> <input  class="form-control" type="text" name="deskripsi" required="required" value="{{ $p->product_desc }}"></td>
                        </tr>

		                <tr>
                            <td>Gambar Produk</td> 
                            <td><img src="{{ asset('uploads/'.$p->product_img)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
                        </tr>
                        
                        <tr>
                            <td></td> 
                            <td> <input class="form-control" type="file" id="inputgambar" name="gambar" class="validate" value="{{ $p->product_img }}"></td>
                        </tr>
                        
                        <tr>
						<td></td>
                        <td><input class="btn btn-primary ml-3" type="submit" value="Simpan Data">
                        </tr>
				    </table>
				</form>
				@endforeach
			</div>
		</div>
	</div>

<br>
<br>
<br>
@endsection