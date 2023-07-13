<?php

namespace MyNamespace;

echo "Line Number:" . __LINE__ . "</br>";
echo "The full path of this file is:" . __FILE__ . "</br>";
echo "The full directory of this file is:" . __DIR__ . "</br>";
function MyFunction()
{
    echo "The function is:" . __FUNCTION__ . "</br>";
}
MyFunction();


class MyClass
{
    public function getClassName()
    {
        return __CLASS__;
    }
}

class MyClass1
{
    public function getClassName()
    {
        return __METHOD__;
    }
}
class MyNamspaces
{
    public function getClassName()
    {
        return __NAMESPACE__;
    }
}

trait MyTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}

class MyTraiName
{
   use MyTrait;
}


$obj = new MyClass();

echo $obj->getClassName() . "</br>";

$obj = new MyClass1();

echo $obj->getClassName();

$obj = new MyNamspaces();

echo $obj->getClassName();

$obj=new MyTraiName();

echo $obj->getTraitName(). "</br>";