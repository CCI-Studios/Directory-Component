<?php
require_once 'recaptchalib.php';

class ComDirectoryDatabaseBehaviorRecaptcha extends KDatabaseBehaviorAbstract
{
	protected $_public_key;
	protected $_private_key;
	
	public function __construct(KConfig $config)
	{
		parent::__construct($config);
		
		foreach ($config as $key => $value) {
			$this->{'_'.$key} = $value;
		}
	}
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'public_key'	=> '',
			'private_key'	=> '',
		));
		
		parent::_initialize($config);
	}
	
	
	protected function _beforeTableSave(KCommandContext $context)
	{
		return $this->_verifyReCaptcha($context->data);
	}
	
	protected function _beforeTableUpdate(KCommandContext $context)
	{
		return $this->_verifyReCaptcha($context->data);
	}
	
	protected function _verifyReCaptcha($data)
	{		
		$response = recaptcha_check_answer($this->_private_key, 
						$_SERVER['REMOTE_ADDR'],
						$data['recaptcha_challenge_field'],
						$data['recaptcha_response_field']);
						
		if ($response->is_valid) {
			return true;
		} else {
			return false;
		}
	}
	
	public function getHTML()
	{
		$html = recaptcha_get_html($this->_public_key);
		$html = str_ireplace('<script ', '<script inline ', $html); // add inline attribute to stop Nooku filter from moving it to head
		
		return $html;
	}
}