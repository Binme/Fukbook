<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";

    protected $fillable = ['avatar','cover','gender','birthday','address','phone','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
