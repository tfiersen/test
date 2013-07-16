<?php

App::uses('AppController', 'Controller');

/**
 * Class TestAppController
 */
class TestAppController extends AppController {

	/**
	 * @var int
	 */
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

	public function aboutToBeReverted()
	{

	}
}
