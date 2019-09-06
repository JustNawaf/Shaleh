<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class properties_shaleh extends Model
{
    use SoftDeletes;
    public function property(){
        return $this->belongsTo('App\Property','property_id');
    }
}
