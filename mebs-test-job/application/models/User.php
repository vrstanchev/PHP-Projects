<?php
include_once 'BaseMapper.php';
/**
 * @Entity
 * @HasLifecycleCallbacks
 * @Table(name="user")
 */
class Default_Model_User extends Default_Model_BaseMapper {

    /**
     * @var integer
     * @Id @Column(name = "UserId", type = "bigint", unique = true, length = 20)
	 * @GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @Column(name = "Email", type = "string", length = 250)
     */
    private $email;

    /**
     * @var string
     * @Column(name = "CreationTime", type = "string")
     */
    private $creation_time;

    /**
     * @var integer
     * @Column(name = "Status", type = "integer", length = 11)
     */
    private $status;

    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }

}
