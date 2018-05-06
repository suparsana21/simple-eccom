<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'product_name',
        'description',
        'price',
        'seller_name',
        'seller_phone',
        'seller_address',
        'image',
        'seller_ktp',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
