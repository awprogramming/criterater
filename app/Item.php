<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function criterating(){
        return $this->belongsTo('\App\Criterating','criterating_id','id');
    }
}
