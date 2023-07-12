<?php
spl_autoload_register(function($class) {
    require "17autoload/" . $class . ".php";
});

$test1 = new first();
$test2 = new second();

?>