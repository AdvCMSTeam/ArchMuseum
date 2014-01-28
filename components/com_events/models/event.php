<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.01.14
 * Time: 9:16
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

/**
 * HelloWorld Model
 */
class EventsModelEvent extends JModelItem
{
    /**
     * @var string msg
     */
    private $db;
    /**
     * Get the message
     * @return string The message to be displayed to the user
     */
    function __construct(){
        parent::__construct();
        $this->db = JFactory::getDbo();
    }

    public function getOne($id1)
    {
        $db = JFactory::getDbo();
        $query = "SELECT * FROM #__events_main WHERE id=".$id1;
        $db->setQuery($query);
        $res = $this->db->loadObject();
        return $res;
    }
}