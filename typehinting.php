<?php
class School {
    public function getNames($names) {
        foreach ($names as $name) {
            echo $name . "<br>";
        }
    }
}

class Student {
    public function getNames() {
        return ["Ram", "Krishna", "Gopal"];
    }
}

class library{
    
}


$stu = new Student();
$sch = new School();
$names = $stu->getNames();
$sch->getNames($names);

?>