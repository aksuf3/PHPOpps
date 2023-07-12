<?php

class abc{
private $data=["name"=>"Yahoo Baba","course"=>"PHP","fee"=>"2000"];
public function __get($key){
if(array_key_exists($key,$this->data)){
    return $this->data[$key];
}else{
return "This is key($key) is not defined";

}
}
}

$test=new abc();
echo $test->name;
echo $test->course;
?>