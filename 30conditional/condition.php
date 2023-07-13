<?php
interface MyInterface{

}
class MyClass{

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

?>