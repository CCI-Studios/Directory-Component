<?php

class ComDirectoryViewCompanyHtml extends ComDirectoryViewHtml
{
	
	public function display()
	{
		//$behaviors = $this->getModel()->getTable()->getBehaviors();
		//$recaptcha = $behaviors['admin::com.directory.database.behavior.recaptcha'];
		//$this->assign('recaptcha', $recaptcha->getHTML());
		
		return parent::display();
	}
}