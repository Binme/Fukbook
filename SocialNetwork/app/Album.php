<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";

    protected $fillable = ['img','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
