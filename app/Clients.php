<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $guarded = [];

    public function categories_all(){
        return $this->belongsTo(Categories::class,'categ_id','id');
    }
}
