<?php

class MyClassB
{
    public function __construct()
    {
        $s = new MyClassA();
        $s->getTest();
    }
}

