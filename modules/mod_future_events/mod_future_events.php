<?php
	defined('_JEXEC') or die('Restricted access');
	require_once( dirname(__FILE__).DS.'helper.php' );
	$data = modFutureHelper::getData($params);
	require(JModuleHelper::getLayoutPath('mod_future_events'));
?>