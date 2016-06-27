<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    public function pinpads()
    {
        return $this->hasMany('App\Pinpad');
    }

}
