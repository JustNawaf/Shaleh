<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shaleh extends Model
{
    protected $guarded = [];


    public function properties()
    {
        $this->hasMany('App\properties_shaleh','shaleh_id');
    }
}
