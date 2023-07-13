<?php
$a=5;
$b=& $a;
$b=10;
// echo $a;
?>

<?php
class student{
    public $name;
    public $course;
    public function __construct($n)
    {
        $this->name=$n;
    }

    public function setCourse(course $c)
    {
        $this->course=$c;
    }
    public function __clone()
    {
        $this->course=clone $this->course;
    }

}
class course{
    public $cname;
    public function __construct($cn){
$this->cname=$cn;
    }
}
$student1=new student("Yahoo Baba");
$course1=new course('PHP');
$student1->setCourse($course1);
$student2=clone $student1;
$student2->name="Ram Kumar";
echo $student1->name;
echo $student2->name;
print_r($student1);
print_r($student2);
?>