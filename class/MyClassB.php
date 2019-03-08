<?php

use My\Demo\MyClassA;

class MyClassB
{
    public function __construct()
    {
        $s = new MyClassA();
        $s->getTest();
    }
}

