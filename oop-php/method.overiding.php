<?php
class Teacher
{
    public $location = 'Delhi';
    function nextExam()
    {
        echo "next exam is maths";
    }
    function myAge()
    {
        echo "my age is 30";
    }
}


class Student extends Teacher
{
    public $location = 'Noida';
    function myAge()
    {
        echo "my age is 20";
    }
}

$s1 = new Student();
$s1->nextExam();
echo "<br/>";
$s1->myAge();
echo "<br/>";
echo $s1->location;
