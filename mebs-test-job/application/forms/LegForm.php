<?php  
use Zend\Form\Form;  

class LegForm extends Zend_Form {
   
   public function __construct($name = null) { 
      parent::__construct('leg');  
      $this->add(array( 
         'name' => 'Location', 
         'type' => 'Text', 
         'options' => array( 
            'label' => 'Location', 
         ), 
      ));  
      $this->add(array( 
         'name' => 'ManualDate', 
         'type' => 'Text', 
         'options' => array( 
            'label' => 'ManualDate', 
         ), 
      ));  
      $this->add(array( 
         'name' => 'DateLocation', 
         'type' => 'Number', 
         'options' => array( 
            'label' => 'DateLocation', 
         ), 
      ));  
      $this->add(array( 
         'name' => 'submit', 
         'type' => 'Submit', 
         'attributes' => array( 
            'value' => 'Go', 
            'id' => 'submitbutton', 
         ), 
      )); 
   } 
}
