<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
	private Calculator $calculator;
	
	protected function setUp(): void
	{
		$this->calculator = new Calculator();
	}
	
	public function testAdd(): void
	{
		$this->assertEquals(4, $this->calculator->add(2, 2));
	}
	
	public function testDivide(): void
	{
		$this->assertEquals(2, $this->calculator->divide(4, 2));
	}
}