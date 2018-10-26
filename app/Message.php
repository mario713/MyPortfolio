<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    public $timestamps = false;

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
