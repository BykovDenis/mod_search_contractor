<?php

defined('_JEXEC') or die("Restricted access2");

class modSearchContractorHelper {

	static function getContractor(){
            
            if(JRequest::getVar('contractor_name')){

		$db = JFactory::getDbo();

		$query = $db->getQuery(true);

		$query->select('contractor_id, name');
		$query->from('#__contractor');                
                $query->where('name like "%'.JRequest::getVar('contractor_name').'%"');                
		$query->order('contractor_id') ;

		$db->setQuery($query,0);
		$result = $db->loadObjectList();
		return (array) $result;
                
            }
            else {
                
                return (array) 'Нет даных';
                
            }

	}

}