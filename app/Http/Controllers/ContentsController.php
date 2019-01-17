<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Content;
use App\CrudProduct;
use App\CrudBlog;

class ContentsController extends Controller
{
    

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
    
    public function blog(){
        $blog = DB::table('blog')->get();
        return view('blog', ['blog' => $blog]);
    }
    
    public function contact(){
        return view('contact');
    }
    
    public function product(){
        $product = DB::table('product')->get();
        return view('product', ['product' => $product]);
    }
    
    public function singlepost(){
        $blog = DB::table('blog')->get();
        return view('singlepost', ['blog' => $blog]);
    }

    public function admin()
    {
        return view('admin.admin');
    }
}
