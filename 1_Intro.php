<?php

# First example
// class Calculator {

//     public $a, $b, $c;

//     function sum()
//     {
//         $this->c=$this->a+$this->b;
//         return $this->c;
//     }

//     function sub()
//     {
//         $this->c=$this->a-$this->b;
//         return $this->c;
//     }
// }

//     $c1=new Calculator();

//     $c1->a=10;
//     $c1->b=20;

//     echo "Sum is ".$c1->sum();
//     echo "<br>";

//     $c2=new Calculator();

//     $c2->a=70;
//     $c2->b=20;

//     echo "sub is ".$c2->sub();


#Two Example
// class Person{
    
//     #this properties set the default value.
//     public $name;
//     public $age;

//     function __construct($name="defaultName",$age=0){
//         $this->name=$name;
//         $this->age=$age;
//     }
//     function show()
//     {
//         echo "Your Name: ".$this->name." and age is ".$this->age."<br>";
//     }
// }

// $obj=new Person();
// $obj2=new Person("Khan",25);
// $obj3=new Person("Salman Khan",53);
// //  $obj->name="Khan";
// //  $obj->age=25;

// $obj->show();
// $obj2->show();
// $obj3->show();


# Example 3
// class Employee{

//     public $name;
//     public $age;
//     public $salary;

//     function __construct($name,$age,$salary)
//     {
//         $this->name=$name;
//         $this->age=$age;
//         $this->salary=$salary;
//     }

//     function info()
//     {
//         echo "<h3>Employee Profile</h3>";
//         echo "Employee Name : ".$this->name."<br>";
//         echo "Employee Age : ".$this->age."<br>";
//         echo "Employee Salary : ".$this->salary."<br>";
//     }
// }
// class Manager extends Employee{

//     public $ta=1000;
//     public $phone=300;
//     public $totalSalary;

//     function info()
//     {
//         $this->totalSalary=$this->salary+$this->ta+$this->phone;
//         echo "<h3>Manager Profile</h3>";
//         echo "Manager Name : ".$this->name."<br>";
//         echo "Manager Age : ".$this->age."<br>";
//         echo "Manager Salary : ".$this->totalSalary."<br>";
//     }
// }

// $e1=new Employee("Jawad",26,20000);
// $e1->info();

// $m1=new Manager("Khan",28,35000);
// $m1->info();


// class Base {
//     protected $name;
//     private $age;

//     public function __construct($name,$age)
//     {
//         $this->name=$name;
//         $this->age=$age;
//     }
//     public function show()
//     {
//         echo "Your Name : ".$this->name." and age is ".$this->age."<br>";
//     }
// }

// class derived extends base{

//     public function get()
//     {
//         echo "Your Name : ".$this->name." and age is ".$this->age."<br>";
//     }
// }
// $obj=new derived("Khan",25);

// // $obj->name="Jawad";
// // $obj->age=24;

// $obj->get();


# Example
// class Base{

//     public $name="Parent Class";

//     public function calc($a, $b)
//     {
//         return "Parent class ".$a*$b;

//     }
// }
// class Derived extends Base{

//     public $name="Child Class";

//     public function calc($a, $b)
// {
//     return "Child class ".$a+$b;

// }
// }

// //Parent class
// $obj=new Base();

// echo $obj->name."<br>";
// echo $obj->calc(3,5)."<br>";

// //Child class
// $obj2=new Derived();

// echo $obj2->name."<br>";
// echo $obj2->calc(3,5);

#Example code 
// abstract class ParentClass{

//     abstract protected function calc($a,$b);

    
// }
// class ChildClass extends ParentClass{

//     public function calc($a,$b)
//     {
//         echo $a+$b;
//     }
// }

// $obj=new ChildClass();

// $obj->calc(20,30);


# Example 
// interface Parent1{

//     function calc($a,$b);
// }
// interface Parent2{
//     function sub($c,$d);
// }

// class ChildClass implements parent1,parent2
// {
//     public function calc($a,$b)
//     {
//         echo "Addition : ".$a+$b;
//     }
//     public function sub($c,$d)
//     {
//         echo "Subtraction : ".$c-$d;
//     }
// }

// $obj=new ChildClass();

// $obj->calc(10,5);
// echo "<br>";
// $obj->sub(10,5);


# Example
// class Base{

//     public static $name="Yahoo Baba";

//     // public function __construct($name)
//     // {
//     //     self::$name=$name;
//     // }

//     public static function show()
//     {
//         echo "Base Class Static Method";
//     }
// }
// class Derived extends Base{
    
//     public static function show()
//     {
//         echo "Derived Class".parent::$name;
//     }
// }

// // $obj=new Base("Khan");


// echo Base::$name;
// echo "<br>";
// Base::show();

// $obj=new Derived();
// echo "<br>";
// $obj->show();

#Late Static binding
// class Base{

//     protected static $name="Yahoo";

//     public function show()
//     {
//         echo self::$name."<br>";
//         echo static::$name;
//     }
// }
// class Derived extends Base{

//     protected static $name = "Khan";
// }

// $obj=new Derived();
// $obj->show();

# Trait Method
// trait hello{
//     public function sayHello(){
//         echo "Hello everyOne";
//     }
//     public function sayHi(){
//         echo "hi everyOne";
//     }
// }
// trait bye{
//     public function sayBye(){
//         echo "Bye everyOne";
//     }
// }
// class Base{
//     use hello;
//     use bye;
// }
// class Base2{
//     use hello;
//     use bye;
// }

// $obj=new Base();
// $obj->sayHello();
// echo "<br>";
// $obj->sayHi();
// echo "<br>";
// $obj->sayBye();
// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo "Object two";
// echo "<br>";
// $obj2=new Base();
// $obj2->sayHello();
// echo "<br>";
// $obj2->sayHi();
// echo "<br>";
// $obj2->sayBye();

# Traits Method Overriding
// trait hello{
//     public function sayHello()
//     {
//         echo "Hello from Hello trait.\n";
//     }
// }
// trait hi{
//     public function sayHello()
//     {
//         echo "Hello from hi trait.\n";
//     }

// }

// class Base{
//     use hello,hi{
//         hello::sayHello insteadOf hi;
//         hi::sayHello as newhello;
//     }
// }

// $test=new Base();
// $test->sayHello();
// $test->newhello();

// trait hello{
//     private function sayHello()
//     {
//         echo "Hello from Hello trait.\n";
//     }
// }




// class Base{
//     use hello{
//         hello::sayHello as public newhello;

//     }
// }

// $test=new Base();
// $test->newhello();

# Type hinting
// function fruits(array $name)
// {
//     foreach ($name as $value) {
//         echo $value."<br>";
//     }

// }

// $test = ["Apple","Orange","Banana"];
// fruits($test);

###
// class Hello{
//     public function sayHello()
//     {
//         echo "Hello Everyone";
//     }
// }
// class Bye{
//     public function sayBye()
//     {
//         echo "Bye Everyone";
//     }
// }

// function wow(Hello $c)
// {
//     $c->sayHello();
// }

// $obj=new Hello();

// wow($obj);


class School{
    public function getName(Student $name)
    {
        echo "<ul>";
    foreach ($name->Names() as  $value) {
        echo "<li>".$value."</li>";
    }
    echo "</ul>";
}
}
class Student{
    public function Names()
    {
        return ["Khan","Jawad","Saqib"];
    }
}

$stu=new Student();
$sch=new School();

$sch->getName($stu);


?>