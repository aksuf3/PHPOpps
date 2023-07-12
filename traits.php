<?php
trait Hello {
    public function sayHello() {
        echo "Hello everyone";
    }
}

class Base {
    use Hello;
}
class Base2 {
    use Hello;
}
$test = new Base();
$test2 = new Base2();
$test->sayHello()."</br>";
$test2->sayHello();

?>
