<?php

class Student {
    private $fname;
    private $lname;
    function getName(){
        return $this -> fname;
    }
    function getFName() {
        return $this->fname;
    }
    function getLname() {
        return $this->lname;
    }
    function setName($fname, $lname) {
        $this->fname = $fname;
        $this->lname = $lname;
    }
}

class child extends Student {
    function getName() {
        return $this->getFname()."  ".$this->getLname();
    }
}

$stu = new Student();
$stu -> setName("Shivam", "SHarma");
echo $stu -> getName();
echo "<br>";

$child = new child();
$child -> setName("Sunil", "Biswakarma");
echo $child -> getName();


?>