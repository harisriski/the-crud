<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'category_id', 'price', 'stock'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
