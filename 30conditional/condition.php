<?php
interface MyInterface{

}
class MyClass{
public $test;
}
trait Mytrait{
    public function Mymethod(){

    }
}

if(trait_exists('Mytrait')){
echo "This trait is exists";
}else{
    echo "This trait is not exists";
}


//interface related
if(interface_exists('MyInterface')){
echo "Tis interface is exists";
class MyClasss1 implements MyInterface{

}
}else{
echo "This interface does not exists";
}

//class related
if(class_exists('MyClass')){
echo"This class is exists";
}else{
    echo"This class is not  exists";
}

if(property_exists('MyClass','test')){
    echo "This Property is exists";

}else{
    echo "This propety does not eists";
}

$obj=new MyClass();
if(is_a($obj,'MyClass')){
    echo "This  Object is of clss myclass";
}else{
    echo "tThis object is not of Class My Class";
}

?>