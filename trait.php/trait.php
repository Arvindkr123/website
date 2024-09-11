<?php

trait parentCompany1
{

    function getTotalEmp()
    {
        echo 500;
    }

    function getTotalProjects()
    {
        echo 565;
    }
}
trait parentCompany2
{

    function getTotalOffice()
    {
        echo 500;
    }
}

class Company
{
    use parentCompany1;
    use parentCompany2;
}

$c1 = new Company();
$c1->getTotalEmp();
echo "<br/>";
$c1->getTotalProjects();
echo "<br/>";
$c1->getTotalOffice();
