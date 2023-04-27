<?php

require_once APPLICATION_PATH . '/controllers/FrontController.php';

class UserController extends FrontController
{

    public function indexAction()
    {
        $this->view->title = "Users list";
        $this->view->users = $this->_em->getRepository('Default_Model_User')->findAll();
    }

}

