<?php

namespace App\Data;

class Bar {
    private Foo $foo;
    public function __construct(Foo $foo){
        $this->foo = $foo;
    }
    function Bar():string{
        return $this->foo->foo(). " and Bar";
    }
}