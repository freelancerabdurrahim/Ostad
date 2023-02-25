<?php
class A{
    protected static $name;
    static function sayHi(){
        self::$name="Hello Word\n";
        echo "Hi From A\n";
    }
}

class B extends A{
   static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Hi From B\n";
        
    }
}

B::sayHi();
// echo B::$name;