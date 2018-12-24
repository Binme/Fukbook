<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $table = "maps";

    protected $fillable = ['lat','lng','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
