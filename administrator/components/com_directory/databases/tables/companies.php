<?php

class ComDirectoryDatabaseTableCompanies extends KDatabaseTableDefault
{

	protected function _initialize(KConfig $config)
	{
		$recaptcha = KDatabaseBehavior::factory('admin::com.directory.database.behavior.recaptcha', array(
			'public_key'	=> '6Ld9vcQSAAAAANnFhdPVOP-V9DHhfGM8udDMFQsC',
			'private_key'	=> '6Ld9vcQSAAAAABZJ4TLgfvuRsIMl4vJk4rg5ZjGn',
		));
		
		$sluggable = KDatabaseBehavior::factory('sluggable', array(
			'separator'	=> '---',
		));

		$config->append(array(
			'behaviors' => array($sluggable), //array($recaptcha, $sluggable),
		));
		parent::_initialize($config);
	}
}