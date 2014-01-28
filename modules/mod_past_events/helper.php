<?php
class ModTestHelper
{
    private $_pagination = null;
	public function getData($params)
	{
		$db = JFactory::getDbo();
        $limitstart = JRequest::getVar('limitstart', 0, '', 'int');
        $totalquery = "SELECT COUNT(1) FROM #__events_main WHERE (date < CURDATE()) AND (state = 1)";
        $db->setQuery($totalquery);
        $total = $db->loadResult();
        $query = "SELECT * FROM #__events_main WHERE (date < CURDATE()) AND (state = 1) ORDER BY date DESC ";
		$db->setQuery($query, $limitstart, $params->get('pageLimit'));
		$result = $db->loadObjectList();
        foreach($result as $key => $item) {
            if((int) strlen($item->description) > $params->get('textLimit')){
                $result[$key]->description =  substr($item->description, 0, $params->get('textLimit')-3).'...';
            }
        }

        jimport('joomla.html.pagination');
        $this->_pagination = new JPagination($total, $limitstart, $params->get('pageLimit'));
        return $result;
    }

    public function getPagination()
    {
        return $this->_pagination;
    }
}
?>