<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shaleh extends Model
{
    protected $guarded = [];


    public function properties()
    {
        return $this->hasMany('App\properties_shaleh','shaleh_id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','shaleh_id');
    }
    public function city(){
        return $this->belongsTo('App\City','city_id');
    }
}
