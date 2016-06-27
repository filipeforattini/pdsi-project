<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $fillable = ['customer_id','name','flag','number','expires_at','expires_string','cvv'];

	public function customer()
	{
        return $this->belongsTo('App\Customer');
	}

}
