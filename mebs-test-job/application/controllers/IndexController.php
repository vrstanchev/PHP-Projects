<?php

require_once APPLICATION_PATH . '/controllers/FrontController.php';

class IndexController extends FrontController
{

    public function indexAction()
    {
        $this->view->title = "Information";
    }

    public function jobAction()
    {
        $this->view->title = "Job Description";
    }


}

