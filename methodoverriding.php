<?php
trait Hello {
    private function sayhello() {
        echo "Hello my traits";
    }
}


class Base {
    use Hello{
        Hello::sayhello as public;
       
    }
}

$test = new Base();
$test->sayhello();

?>
