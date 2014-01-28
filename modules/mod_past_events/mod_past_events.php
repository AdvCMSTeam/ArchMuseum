<?php
	defined('_JEXEC') or die('Restricted access');
    jimport('joomla.html.pagination');
	require_once( dirname(__FILE__).DS.'helper.php' );
    $helper = new ModTestHelper();
	$data =$helper->getData($params, 3);
    $pageNav = $helper->getPagination();
   	require(JModuleHelper::getLayoutPath('mod_past_events'));
?>