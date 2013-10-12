<?php

App::uses('TestAppModel', 'Test.Model');

/**
 * Class FooBar
 */
class FooBar extends TestAppModel {

	/**
	 * @param array $options
	 * @return bool
	 */
	public function beforeSave($options = array())
	{
		return parent::beforeSave($options);
	}

	public function test()
	{

	}
}
