<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['title', 'description', 'city', 'image'];
    protected $table = 'businesses';

    public $primarykey = 'id';

    public $timestamps = true;
}
