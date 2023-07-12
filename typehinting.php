<?php
class hello{
    public function sayhello(){
        echo "Hello everyone";
    }
}

class bye{
    public function saybe(){
        echo "Bye evryone";
    }
}

function wow(hello $c){
    $c->sayhello();
}
$test=new bye();
$test1=new hello();
wow($test1);
?>