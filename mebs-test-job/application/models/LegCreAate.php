<?php  
require_once APPLICATION_PATH . '/models/Leg.php';
use Zend\Db\TableGateway\TableGatewayInterface;  

class LegCreate {
   protected $tableGateway; 
   public function __construct(TableGatewayInterface $tableGateway) { 
      $this->tableGateway = $tableGateway; 
   }  
   public function fetchAll() { 
      $resultSet = $this->tableGateway->select(); 
      return $resultSet; 
   }  
   public function getLeg($id) { 
      $id  = (int) $id; 
      $rowset = $this->tableGateway->select(array('id' => $id)); 
      $row = $rowset->current(); 
      if (!$row) { 
         throw new \Exception("Could not find row $id"); 
      } 
      return $row; 
   }  
   public function saveLeg(Default_Model_Leg $legmodel) { 
      $data = array ( 
         'location_val' => $legmodel->location, 
         'manualdate_val'  => $legmodel->manualdate, 
      );  
      $id = (int) $legmodel->id; 
      if ($id == 0) { 
         $this->tableGateway->insert($data); 
      } else {
         if ($this->getLeg($id)) { 
            $this->tableGateway->update($data, array('id' => $id));  
         } else { 
            throw new \Exception('Book id does not exist'); 
         } 
      } 
   } 
}
