<?php
include_once 'BaseMapper.php'; 
use Zend\InputFilter\InputFilterInterface; 
use Zend\InputFilter\InputFilterAwareInterface; 
use Zend\InputFilter\InputFilter; 

/**
 * @Entity
 * @HasLifecycleCallbacks
 * @Table(name="leg")
 */
class Default_Model_Leg extends Default_Model_BaseMapper {

    /**
     * @var integer
     * @Id @Column(name = "LegId", type = "bigint", unique = true, length = 20)
	 * @GeneratedValue
     */
    private $leg_id;

    /**
     * @var string
     * @Column(name = "Location", type = "string", length = 250)
     */
    private $location;

    /**
     * @var string
     * @Column(name = "ManualDate", type = "string")
     */
    private $manualdate;

    /**
     * @var integer
     * @Column(name = "DateLocation", type = "integer", length = 11)
     */
    private $datelocation;
    
 public function setLocation($location) 
  {
    $this->location = $location;
  }
  public function setManualDate($manualdate) 
  {
    $this->manualdate = $manualdate;
  }
  public function setDateLocation($datelocation) 
  {
    $this->datelocation = $datelocation;
  }
    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }
    public $id_val; 
   public $location_val; 
   public $manualdate_val;
     public $datelocation_val;
   protected $inputFilter; 
public function setInputFilter(InputFilterInterface $inputFilter) { 
      throw new \Exception("Not used"); 
   }  
   public function getInputFilter() { 
      if (!$this->inputFilter) { 
         $inputFilter = new InputFilter(); 
         $inputFilter->add(array( 
            'name' => 'id_val', 
            'required' => true, 
            'filters' => array( 
               array('name' => 'Int'), 
            ),
         )); 
         $inputFilter->add(array( 
            'name' => 'location_val', 
            'required' => true, 
            'filters' => array( 
               array('name' => 'StripTags'), 
               array('name' => 'StringTrim'), 
            ), 
            'validators' => array( 
               array( 
                  'name' => 'StringLength', 
                  'options' => array( 
                     'encoding' => 'UTF-8', 
                     'min' => 1, 
                     'max' => 100, 
                  ), 
               ), 
            ), 
         )); 
         $inputFilter->add(array( 
            'name' => 'manualdate_val', 
            'required' => true, 
            'filters' => array( 
               array('name' => 'StripTags'), 
               array('name' => 'StringTrim'), 
            ), 
            'validators' => array( 
               array( 
                  'name' => 'StringLength', 
                  'options' => array( 
                     'encoding' => 'UTF-8', 
                     'min' => 1, 
                     'max' => 100, 
                  ), 
               ), 
            ), 
         )); 
         $inputFilter->add(array( 
            'name' => 'datelocation_val', 
            'required' => true, 
            'filters' => array( 
               array('name' => 'StripTags'), 
               array('name' => 'StringTrim'), 
            ), 
            'validators' => array( 
               array( 
                  'name' => 'StringLength', 
                  'options' => array( 
                     'encoding' => 'UTF-8', 
                     'min' => 1, 
                     'max' => 100, 
                  ), 
               ), 
            ), 
         )); 
         
}}
public function exchangeArray($data) { 
      $this->id_val = (!empty($data['id_val'])) ? $data['id_val'] : null; 
      $this->location_val = (!empty($data['location_val'])) ? $data['location_val'] : null; 
      $this->manualdate_val = (!empty($data['manualdate_val'])) ? $data['manualdate_val'] : null; 
      $this->datelocation_val = (!empty($data['datelocation_val'])) ? $data['datelocation_val'] : null; 
   } 
}
