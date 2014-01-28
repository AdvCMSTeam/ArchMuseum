<?php
class modFutureHelper
{
	public static function getData($params)
	{
		$db = JFactory::getDbo();
        $query = "SELECT * FROM #__events_main WHERE (date > CURDATE()) AND (state = 1) ORDER BY date";
		$db->setQuery($query);
		$result = $db->loadObjectList();
        foreach($result as $key => $item) {
            if((int) strlen($item->description) > $params->get('textLimit')){
                $result[$key]->description =  substr($item->description, 0, $params->get('textLimit')-3).'...';
                //print_r($result[$key]);
            }
        }

		return $result;
	}
}
?>