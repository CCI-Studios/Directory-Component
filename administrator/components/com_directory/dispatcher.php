<?php

class ComDirectoryDispatcher extends ComDefaultDispatcher
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller'	=> 'companies',
			'request'		=> array('draft' => KRequest::get('get.draft', 'boolean', false)),
		));
		
		parent::_initialize($config);
	}
}