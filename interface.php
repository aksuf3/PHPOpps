<?php

interface parent1{
    function calc($a,$b);
}
interface parent2{
    function sub($c,$d);
}

class childclass implements parent1,parent2{
    public function calc($a, $b)
    {
        echo $a+$b;
    }
   public function sub($c, $d)
    {
    echo $c-$d;
    }
}
$test=new childclass();
$test->calc(5,6)."<br>";
$test->sub(6,5);
