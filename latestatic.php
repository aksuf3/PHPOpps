<?php
class Base {
    protected static $name = "Yahoo";

    public static function show() {
        echo static::$name;
    }
}

class Derived extends Base {
    protected static $name = "Baba";
}

Base::show();
Derived::show();
?>
