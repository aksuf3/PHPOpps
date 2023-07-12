<?php
class Base {
    public static $name = "Yahoo Baba";

    public static function show() {
        echo self::$name;
    }
}

class Derived extends Base {
    // No need to redefine the show() method in the Derived class
}

Derived::show();
?>
