<?php

abstract class ValidatorTestCase extends Orchestra\Testbench\TestCase
{
	public function setUp(): void
	{
		parent::setUp();

		$this->app->register(\UsinaTech\BrValidator\ValidatorProvider::class);
	}
}