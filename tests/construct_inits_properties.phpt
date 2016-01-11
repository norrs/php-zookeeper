--TEST--
Should initialize object properties
--SKIPIF--
<?php
if (!extension_loaded('zookeeper')) {
    echo 'Zookeeper extension is not loaded'
};
--FILE--
<?php

class Foo extends Zookeeper {
    public $foo;
    public $bar = 5;
}

$foo = new Foo();

var_dump($foo->foo);
var_dump($foo->bar);
var_dump($foo->baz);

--EXPECTF--
NULL
int(5)

Notice: Undefined property: Foo::$baz in %s on line %d
NULL
