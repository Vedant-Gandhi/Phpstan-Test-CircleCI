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

class ProblematicCode
{
	private $undefinedType; // Missing type declaration
	
	public function arrayProblem(array $data)  // Return type missing
	{
		return $data[0]; // Possible undefined index
	}
	
	public function nullProblem(?string $input): string
	{
		return $input; // Possible null return
	}
	
	public function typeMismatch(string $number): int
	{
		return $number; // Type mismatch
	}
	
	public function undefinedVariable(): string
	{
		return $someUndefinedVariable; // Undefined variable
	}
	
	/**
	 * @param array $numbers
	 */
	public function missingIterableType($numbers): int // PHPDoc type mismatch with parameter
	{
		return array_sum($numbers);
	}
	
	public function possibleDivisionByZero(int $a, int $b): float
	{
		return $a / $b; // No zero check
	}
	
	/**
	 * @return string[]
	 */
	public function docblockMismatch(): array
	{
		return [1, 2, 3]; // Returns int[] instead of string[]
	}
	
	public function deadCode(): void
	{
		return;
		echo "This will never execute"; // Dead code
	}
}