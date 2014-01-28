<?php
/**
 * @version     1.0.1
 * @package     com_events
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Alex <alekzender89@gmail.com> - http://
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JController::getInstance('Events');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
