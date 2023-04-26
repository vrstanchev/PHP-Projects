<?php
require_once APPLICATION_PATH . '/helpers/UnitManager.php';

class FrontController extends Zend_Controller_Action {

    protected $_em;
    
    public function init()
    {
        $registry = Zend_Registry::getInstance();
        $this->_em = $registry->entitymanager;
    }
}