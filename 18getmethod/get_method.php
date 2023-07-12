<?php
class abc{
private $name="Hello Yahoo bana";
public function __get($property){
echo "You are trying to access non existng or private property($property)";
}
}
$test=new abc();
$test->name;


?>