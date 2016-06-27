<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pinpad extends Model
{

    public $fillable = ['establisment_id', 'serial', 'credit', 'debit', 'pass', 'fee_easymoney'];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function monthly()
    {
        $this->transactions()->select(DB::raw("tarnsaction.pinpad_id, year(transaction.transacted_at) as transaction_year, month(transaction.transacted_at) as transaction_month, sum(transaction.amount) as total"))->groupby('pinpad_id, transaction_year, transaction_month')
        ->get();

    	return DB::table('transactions')
    		->select('pinpad_id')
    		->select('year(transacted_at) as transaction_year')
    		->select('month(transacted_at) as transaction_month')
    		->select('sum(amount) as total')
    		->where('pinpad_id',$this->id)
			->groupby('pinpad_id, transaction_year, transaction_month')
			->get();
    }
}
