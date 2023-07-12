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
      if(method_exists($this,$method)){
call_user_func_array([$this,$method],$arguments);
      }else{
echo "Method does not exists:$method";
      };
    }
}

$test=new student();
$test->setName("Yahoo","Baba");
echo "<pre>";
print_r($test);
echo "</pre>";