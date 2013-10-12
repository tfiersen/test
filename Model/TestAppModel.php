<?php

App::uses('AppModel', 'Model');

class TestAppModel extends AppModel {

	public function beforeSave($options = array())
	{
		if(!parent::beforeSave($options))
		{
			return false;
		}

		// ...

		return true;
	}

}
