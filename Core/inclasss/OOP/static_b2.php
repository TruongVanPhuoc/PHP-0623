<?php

class Foo 
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic(): string
    {
        return parent::$my_static;
    }
}

// print Foo::$my_static . "\n";

// $foo = new Foo();
// print $foo->staticValue() . "\n";
// print $foo->my_static . "\n"; 

// print $foo::$my_static . "\n";

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";


// static có thể được truy cập thông qua tên của lớp mà không cần khởi tạo đối tượng. 
// Một thuộc tính static thì không thể được truy cập thông qua một đối tượng của lớp đó, nhưng một phương thức static thì có thể được gọi thông qua một đối tượng của lớp.