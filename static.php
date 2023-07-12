<?php
class base{
public static $name="Yahoo Baba";
public static function show(){
    echo self::$name;
}
public function __construct(){
self::show();
}
}
echo base::$name;
base::show();
?>