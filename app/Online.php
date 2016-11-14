<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
#use App\User;

class Online extends Model
{

	protected $table = 'sessions';

    protected $fillable = [
        'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
