<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

	public $dates = ['transacted_at'];

	public function card()
	{
        return $this->belongsTo('App\Card');
	}

	public function calculateFee()
	{
		$pinpad = Pinpad::findOrFail($this->pinpad_id);
		$this->fee_easymoney = $this->amount * $pinpad->fee_easymoney / 100;
		$this->fee_aquire = $this->amount * $pinpad->credit / 100;
		$this->save();
	}

	public function earnings()
	{
        return ($this->amount - $this->fee_easymoney - $this->fee_aquire);
	}

}
