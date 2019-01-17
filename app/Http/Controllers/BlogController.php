<?php

namespace App\Http\Controllers;

use App\CrudBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogController extends Controller
{
    //
    
    public function index()
    {
        $blog = DB::table('blog')->get();

        return view('admin.blog', ['blog' => $blog]);
    }

    public function tambah()
    {
        return view('admin.blogtambah');
    }

    public function update(Request $request)
    {
        $update = CrudBlog::where('blog_id', $request->id)->first();
        $update->blog_name = $request['nama'];
        $update->blog_desc = $request['deskripsi'];

        if($request->file('gambar') == "")
        {
            $update->blog_img = $update->blog_img;
        }
        else
        {
            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $request->file('gambar')->move("uploads/", $fileName); 
            $update->blog_img = $fileName;
        }
        
        $update->update();
        return redirect('/blog_admin');
    }

    public function edit($id)
    {
        $blog = DB::table('blog')->where('blog_id',$id)->get();
        return view('admin.blogedit',['blog' => $blog]);
    }

    
    public function store(Request $request)
    {
        $tambah = new CrudBlog;
        $tambah->blog_name = $request['nama'];
        $tambah->blog_desc = $request['deskripsi'];

        $file = $request->file('gambar');
        $fileName = $file->getClientOriginalName();
        $request->file('gambar')->move("uploads/", $fileName);        
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $tambah->blog_img = $fileName;
        $tambah->blog_date = $now;
        $tambah->save();
        
        return redirect('/blog_admin');
    }

    public function hapus($id)
    {
        DB::table('blog')->where('blog_id', $id)->delete();

        return redirect('/blog_admin');
    }
}
