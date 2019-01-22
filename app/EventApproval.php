<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventApproval extends Model
{
    protected $table = 'events';
    public $primaryKey = 'id';
    public $timestamps = true;

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
