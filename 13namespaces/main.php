<?php

include('testing.php');
include('products.php');
function wow(){
    echo "Wow from products main life";
}
$obj=new test\product();
$obj=new pro\product();

wow();
pro\wow();
?>
