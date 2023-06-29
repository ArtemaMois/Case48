<?php

class Human 
{
    private $name;
    private $surname;
    private $age;

    public function __construct($name, $surname,$age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getname (){
        echo $this->name."<br>";
    }

    public function setname ($name){
        $this->name = $name;
    }

    public function getsurname (){
        echo $this->surname."<br>";
    }

    public function setsurname ($surname){
        $this->surname = $surname;
    }

    public function getage (){
        echo $this->age."<br>";
    }

    public function setage ($age){
        $this->age = $age;
    }

}