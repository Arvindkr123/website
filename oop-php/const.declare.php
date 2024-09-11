<?php
class ConstantDemo
{
    protected const collegeName = 'KNMIT';
    // const collegeName = 'KNMIT';
    function getCollegeName()
    {
        echo self::collegeName;
        // echo ConstantDemo::collegeName;
    }
}

class Child extends ConstantDemo
{
    function getChildName()
    {
        echo self::collegeName;
    }
}

// $c1 = new ConstantDemo();
// $c1->getCollegeName();

$child1 = new Child();
$child1->getChildName();
