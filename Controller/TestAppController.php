<?php

App::uses('AppController', 'Controller');

class TestAppController extends AppController {

	public $bar = 42;

	/**
	 * Returns `bar`
	 *
	 * @return string
	 */
	public function foo()
	{
		return 'bar';
	}

}
