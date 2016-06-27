<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'customers';

    public $fillable = ['establishment_id', 'firstname', 'lastname', 'address_state','address_city','address_number','address_zip'];

	public function establishment()
	{
        return $this->belongsTo('App\Establishment');
	}

	public function getName()
	{
		return $this->firstname . ' ' . $this->lastname;
	}

	public function cards()
	{
        return $this->hasMany('App\Card');
	}

}
