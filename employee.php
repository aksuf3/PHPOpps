<?php
class employee{
    public $name;
    public $age;
    public $salary;

function __construct($n, $a, $s){
     $this->name=$n;
     $this->age=$a;
     $this->salary=$s;
}
function info(){
    echo"<h3>Employee Profile</h3>";
    echo "Employee Name:".$this->name."<br>";
    echo "Employee Age:".$this->age ."<br>";
    echo "Emloyee Salary:".$this->salary."<br>";
}
}

class manager extends employee{
public $ta=1000;
public $phone=300;
public $totalSalary;

    function info(){
        $this->totalSalary=$this->salary+$this->ta+$this->phone;
        echo"<h3>Manager Profile</h3>";
        echo "Employee Name:".$this->name."<br>";
        echo "Employee Age:".$this->age ."<br>";
        echo "Emloyee Salary:".$this->totalSalary."<br>";
    }
    }  
$e2=new manager("Ram",25,10000);
$e1=new employee("Krishan",28,2003);
$e1->info();
$e2->info()."Abutrhrtghgrtyrtyr";
