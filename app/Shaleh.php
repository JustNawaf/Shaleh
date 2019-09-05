<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shaleh extends Model
{
    protected $guarded = [];
    use SoftDeletes;

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
    public function imgs(){
        return $this->hasMany('App\Shaleh_Images','shaleh_id');
    }
}
