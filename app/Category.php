<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('name', 'description');

    public function posts(){
        return $this -> hasMany('App\Post');
    }
}
