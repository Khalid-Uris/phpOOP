<?php

class Circle{

    public $radius;

    // public function __construct(){
    //     echo 'Non Parameterize contructor';
    // }

    
    public function __construct($newRadius){
        $this->radius=$newRadius;
    }
    public function getArea()
    {
        return 3.14*$this->radius**2;
    }
    public function getPerimeter()  {
        return 2*3.14*$this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius=$radius;
    }
}

$circle1=new Circle(100);

echo "The area of the circle of radius",$circle1->radius," is ",$circle1->getArea();



?>