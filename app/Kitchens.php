<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchens extends Model
{
    //
    protected $fillable = [
       'id', 'name','img',
    ];
    public function Recipes(){
        return $this->hasMany('App\Recipes');
    }
   
}
