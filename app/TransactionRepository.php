<?php

namespace App;

class TransactionRepository
{
	
	function __construct($transactions)
	{
		$this->pool = $transactions;
	}

	public function perMonth()
	{
		$months = [];
		
		for ($i=1; $i < 13; $i++)
			$months[$i] = 0;

		foreach ($this->pool as $transaction)
			$months[$transaction->transacted_at->month] += $transaction->earnings();

		return $months;
	}

}