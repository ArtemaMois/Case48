<?php


class Worker
{
    private $job;
    private $income;
    private $exp;

    public function __construct($job, $income, $exp)
    {
        $this->$job =$job;
        $this->$income = $income;
        $this->exp = $exp;
    }

    public function getjob (){
        echo $this->job."<br>";
    }

    public function setjob ($job){
        $this->job = $job;
    }

    public function getincome (){
        echo $this->income."<br>";
    }

    public function setincome ($income){
        $this->income = $income;
    }

    public function getexp (){
        echo $this->exp."<br>";
    }

    public function setexp ($exp){
        $this->exp = $exp;
    }
}