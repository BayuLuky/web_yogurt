<?php

namespace App\Http\Controllers;

use App\CrudProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = DB::table('product')->get();

        return view('admin.product', ['product' => $product]);
    }

    public function tambah()
    {
        return view('admin.producttambah');
    }

    public function update(Request $request)
    {
        $update = CrudProduct::where('product_id', $request->id)->first();
        $update->product_name = $request['nama'];
        $update->product_desc = $request['deskripsi'];

        if($request->file('gambar') == "")
        {
            $update->product_img = $update->product_img;
        }
        else
        {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $request->file('gambar')->move("uploads/", $fileName); 
            $update->product_img = $fileName;
        }
        
        $update->update();
        return redirect('/product_admin');
    }

    public function edit($id)
    {
        $product = DB::table('product')->where('product_id',$id)->get();
        return view('admin.productedit',['product' => $product]);
    }

    
    public function store(Request $request)
    {
        $tambah = new CrudProduct;
        $tambah->product_name = $request['nama'];
        $tambah->product_desc = $request['deskripsi'];

        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();
        $request->file('gambar')->move("uploads/", $fileName);        
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $tambah->product_img = $fileName;
        $tambah->product_date = $now;
        $tambah->save();
        
        return redirect('/product_admin');
    }

    public function hapus($id)
    {
        DB::table('product')->where('product_id', $id)->delete();

        return redirect('/product_admin');
    }
}
