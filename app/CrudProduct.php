<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudProduct extends Model
{
    //
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_name','product_desc'];
    public $timestamps = false;
}
