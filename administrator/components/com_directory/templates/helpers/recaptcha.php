<?php

class ComDirectoryTemplateHelperRecaptcha extends KTemplateHelperDefault
{
	
	public function recaptcha($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'name'	=>	'recaptch',
		));
		
		$behavior = null;
		
		if (!$behavior)
			return "<div>Recaptcha Behavior is missing.</div>";
			
		return "hello world";
	}
}