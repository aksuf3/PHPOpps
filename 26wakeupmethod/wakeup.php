<?php
class Student {
    public $course;
    private $first_name;
    private $last_name;
private $conn;
    public function setName($fname, $lname) {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep() {
        mysqli_close($this->conn);
        return array("first_name", "last_name");
    }

    public function __wakeup() {
        // Perform any necessary post-unserialization tasks here
        mysqli_close($this->conn);
        echo "This is wakeup method";
    }
    public function __construct()
    {
        $this->conn=mysqli_connect();
    }
}

$obj = new Student();
$obj->setName("Yahoo", "Baba");
$srl = serialize($obj);
$us = unserialize($srl);
echo $srl;
print_r($us);

?>