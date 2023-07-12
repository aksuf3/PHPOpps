<?php
trait hello
{
    public function sayhello()
    {
        echo "Helo my traits";
    }
}

trait hi
{
    public function sayhello()
    {
        echo "hi my traits";
    }
}


class base
{
   use hello,hi{
hello::sayhello insteadOf hi;
hi::sayhello as newhello;
   }
}
// class child extends base{
//     use hello;
//     public function sayhello()
//     {
//         echo "Helo my child";
//     }
// }

$test = new base();
$test->sayhello();
$test->newhello();
