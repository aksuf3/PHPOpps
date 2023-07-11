<?php
class base{
    public $name;
    // private $name;
    public function __construct($n){
$this->name=$n;        
    }
    public function show(){
        echo "Your Name:".$this->name."<br>";
    }
}
$test=new base("Yahoo baba");
$test->name="baba Yahoo";
$test->show();
?>