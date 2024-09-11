<?php

class ConsturctorDemo
{
    public $name = '';
    function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$cd = new ConsturctorDemo("rahul kumar");
echo $cd->getName();
