<?php
class MathOperation{

    function sum($a, $b){
        return $a+$b;
    }
    function mul($a, $b){
        return $a*$b;
    }
    function sub($a, $b){
        return $a-$b;
    }
}
$maths = new  MathOperation();
echo "<br/>";
echo $maths->sum(10,120);
echo "<br/>";
echo $maths->mul(55,120);
echo "<br/>";
echo $maths->sub(89,120);
echo "<br/>";
