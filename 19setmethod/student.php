<?php
class student
{
    private $name;
    public function hello(){
echo $this->name;
    }

    public function __get($property)
    {
        echo "You are trying to access non existing or private property($property)";
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "Property does not exists:$property";
        };
    }
}

$test = new Student();
$test->name = "Yahoo Baba";
$test->hello();
