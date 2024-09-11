<?php
class Teachers
{
    private function questionpapers()
    {
        return "important";
    }

    public function exam()
    {
        if ($this->questionpapers() === "important") {
            echo "do something";
        } else {
            echo "do else";
        }
    }

    protected function showAllMarks()
    {
        echo "showed all marks of student";
    }
}


class Management extends Teachers
{
    function recivedStudentsMarks()
    {
        $this->showAllMarks();
    }
}

$t1 = new Teachers();
$t1->exam();
$m1 = new Management();
$m1->recivedStudentsMarks();
