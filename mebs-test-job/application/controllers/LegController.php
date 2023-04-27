<?php

require_once APPLICATION_PATH . '/controllers/FrontController.php';
require_once APPLICATION_PATH . '/models/Leg.php';
require_once APPLICATION_PATH . '/forms/LegForm.php';
require_once APPLICATION_PATH . '/models/Leg.php';
class LegController extends FrontController
{

    public function indexAction()
    {
        $this->view->title = "Legs list";
        $this->view->legs = $this->_em->getRepository('Default_Model_Leg')->findAll();
    }
     
    public function createAction()
    {
	$form = new LegForm();
   $form->get('submit')->setValue('Create');  
   $request = $this->getRequest(); 
   if ($request->isPost()) { 
      $legmodel = new Default_Model_Leg(); 
      $form->setInputFilter($legmodel->getInputFilter()); 
      $form->setData($request->getPost());  
      if ($form->isValid()) { 
         $legmodel->exchangeArray($form->getData()); 
         $this->LegCreate->saveLeg($legmodel);  
         
         // Redirect to list of Tutorial 
         return $this->redirect()->toRoute('leg'); 
      } 
   }  
   return array('form' => $form);
        
    }
public function updateAction()
    {
	
		$loc="Bulgaria";
		$mdate="23-01-12";
		$dloc=1;
        $this->view->title = "Create Leg";
        $leg=new Default_Model_Leg();
        $leg->setLocation($loc);
        $leg->setManualDate($mdate);
        $leg->setDateLocation($dloc);
        $this->_em-> persist($leg) ;
        $this->_em-> flush() ;
        
    }
}



