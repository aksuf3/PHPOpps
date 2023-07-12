<?php
class student
{
    private $first_name;
    private $last_name;
    private function setName($fname,$lname){
        $this->first_name=$fname;
        $this->last_name=$lname;
    }
    public function __call($method, $arguments)
    {
        echo "This is private or Non existing method:$method";
        print_r($arguments);
    }
}
$test=new student();
$test->setName("Yahoo","Baba");