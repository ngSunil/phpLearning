<?php

class Student {
    private $name;
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}

class child extends Student {
    function getName() {
        parent::getName();
    }
}

$student = new Student();
$student -> setName("Shivam");
echo $student -> getName();
?>