<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudBlog extends Model
{
    //
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';
    protected $fillable = ['blog_name','product_desc'];
    public $timestamps = false;
}
