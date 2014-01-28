<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.01.14
 * Time: 8:51
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class EventsViewEvent extends JView{
    private $model;
    private $id;
    protected $item;

    public function display($tpl = null) {
        $this->id = JRequest::getVar('id');
        $this->model = $this->getModel('Event');
        $this->item = $this->model->getOne($this->id);

        parent::display($tpl);
    }
}