<?php
class abc{
    public function __construct()
    {
        echo "This is Constructor functionn";
    }
    public function hello()
    {
        echo "Hello Everyne";
    }
    public function __destruct(){
        echo "This is destruct";
    }
}
$test=new abc();
$test->hello();
?>