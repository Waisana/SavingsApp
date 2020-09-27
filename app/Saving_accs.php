<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving_accs extends Model
{
    //
    protected $guarded = [];
    public function client_details(){
        return $this->belonsTo(Clients::class,'clients_id','id');
    }

    public function categories_all(){
        return $this->belongsTo(Categories::class,'categ_id','id');
    }
}
