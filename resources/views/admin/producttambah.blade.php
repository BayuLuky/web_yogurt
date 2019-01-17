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
                <form action="/product_admin/store" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
                    <table class="table table-bordered">
					    <tr>
                            <td>Nama Product</td> 
                            <td><input class="form-control" type="text" name="nama" required="required"></td>
                        </tr>

		                <tr>
                            <td>Deskripsi Produk</td> 
                            <td> <input  class="form-control" type="text" name="deskripsi" required="required"></td>
                        </tr>

		                <tr>
                            <td>Gambar Produk</td> 
                            <td><input class="form-control" type="file" id="inputgambar" name="gambar" required="required" class="validate"></td>
                        </tr>
                        
                        <tr>
						<td></td>
                        <td><input class="btn btn-primary ml-3" type="submit" value="Simpan Data">
                        </tr>
				    </table>
				</form>
				
			</div>
		</div>
	</div>
<br>
<br>
<br>
@endsection