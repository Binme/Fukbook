<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = "notifications";

    protected $fillable = ['author','content','sendTo','category','tag','status','user_id'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
