<?php
defined('_JEXEC') or die();
defined('KOOWA') or die();

echo KFactory::get('admin::com.directory.dispatcher')->dispatch();