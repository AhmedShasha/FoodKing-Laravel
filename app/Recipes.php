<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    //
    protected $fillable = [
        'name','image','kitchen_id','About',
        'video','direction','ingredients',
    ];

    public function Kitchens(){
        return $this->belongsTo('App\Kitchens','kitchen_id','id');
    }
}
