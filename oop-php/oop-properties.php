<?php
class OppProperty{
    public $name='anil sidhu';

    function getName(){
        echo $this->name;
    }

    function updateName($name){
        $this->name = $name;
    }
}

// create the object of this class
$p1 = new OppProperty();
$p1->getName();
echo "<br/>";
$p1->updateName("ram thaur");
$p1->getName();