<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name', 'description', 'parent', 'icon'];
    protected $table = 'categories';

    public $primarykey = 'id';

    public $timestamps = true;
}
