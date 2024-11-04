<?php

namespace App;

class Calculator
{
	public function add($a, $b)
	{
		return $a + $b;
	}
	
	public function divide($a, $b)
	{
		// Missing null check for $b
		return $a / $b;
	}
	
	/**
	 * @param array $numbers
	 * @return int
	 */
	public function sum(array $numbers)
	{
		return array_sum($numbers);
	}
}
