<?php

App::uses('TestAppModel', 'Test.Model');

/**
 * Class FooBar
 */
class FooBar extends TestAppModel {

	public function beforeSave($options = array())
	{
		return parent::beforeSave($options);
	}

}
