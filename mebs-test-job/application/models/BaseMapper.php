<?php
/** @MappedSuperclass
 * @HasLifecycleCallbacks
 */
abstract class Default_Model_BaseMapper
{
	protected $_em;
	public $_attributes;
	/**
	 * @PostLoad
	 */
	public function Load(){
		$registry = Zend_Registry::getInstance();
		$this->_em = $registry->entitymanager;
	}
	//updates entity with assoc array
	public function updateByArray($array){
		foreach ($array as $key=>$item){
				if (!empty($item)){
					$this->$key = $item;
				}else{
					$this->$key = NULL;
				}
		}
	}
	public function __isset($prop){
		$attr = @$this->$prop;
		return !empty($attr);
	}
}

