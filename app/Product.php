<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'regular_price', 'sale_price', 'stock', 'stock_status', 'Weight', 'length', 'width', 'height', 'purchase_notes', 'min_order', 'keyword','image'];
    protected $table = 'products';

    public $primarykey = 'id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function admin(){
        return $this->belongsTo('Bitfumes\Multiauth\Model\Admin');
    }
}
