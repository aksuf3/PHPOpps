<?php
class student{
    private static function hello($name){
        echo "This is static hello function";
    }
    public static function __callStatic($method, $arguments)
    {
    if(method_exists(__class__,$method)){
call_user_func_array([__class__,$method],$arguments);
    }else{
echo "Method does not exists:$method";
    }
    }
}
student::hello("Yahoo Baba");
?>