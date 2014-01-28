<?php
/**
 * @version     1.0.1
 * @package     com_events
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Alex <alekzender89@gmail.com> - http://
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Events controller class.
 */
class EventsControllerEvents extends JControllerForm
{

    function __construct() {
        $this->view_list = 'eventss';
        parent::__construct();
    }

}