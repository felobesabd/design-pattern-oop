<?php

require_once __DIR__.'/../vendor/autoload.php';

// Abstraction
//use \App\OOP\PHP\Employee;
//use \App\OOP\PHP\Microwave;
//use \App\OOP\PHP\BMW;
//use \App\OOP\PHP\Mercedes;
//use \App\OOP\PHP\Order;

//$phelo = new Employee("phelo", 20, 1500);
//$microwave = new Microwave(90, "DF1", 10);
//
//$bmw = new BMW(120, 2, "front", "black");
//$mercedes = new Mercedes(150, 4, "back", "white");

//$order1 = new Order("cairo", "Alex", 200);
//$order2 = new Order("Aswan", "minia", 100);

//var_dump($microwave->deFreeze());

//var_dump($order1->deliverOrder($mercedes));
//var_dump($order2->deliverOrder($bmw));

// Inheritance
//use \App\OOP\PHP\INHERITANCE\HttpClient;
//use \App\OOP\PHP\INHERITANCE\Client;
//
//$client = new HttpClient("https://localhost:3000", 5);
//
//var_dump($client->connectAfter());
//var_dump($client->call("/"));
//var_dump($client->terminate());

// Polymorphism
//use \App\OOP\PHP\INHERITANCE\Employee2;
//use \App\OOP\PHP\INHERITANCE\Salary;
//use \App\OOP\PHP\INHERITANCE\OrganizationSalary;

//$employee1Salary = new Salary(4500, 0.2, 30, 10, 75, 30);
//$employee1Salary = new OrganizationSalary(
//    4500, 0.2, 30, 10, 75, 30, 0.15
//);
//$employee1 = new Employee2("felo", 20, "elmaadi", $employee1Salary);
//
//var_dump($employee1->getSalary()->calcSalary());

// Relation Association
use \App\OOP\PHP\Relation\Teacher;
use App\OOP\PHP\Relation\Printer\HTMLPrinter;
use App\OOP\PHP\Relation\Student;
use App\OOP\PHP\Relation\MathTeacher;

$teacher1 = new MathTeacher('Ibrahim');
$teacher2 = new MathTeacher('felobes');

//$printer = new HTMLPrinter();
//var_dump($teacher1->sayHello($printer));
//unset($teacher1);
//$printer->setStringPrinter('test 1');
//var_dump($printer->printToScreen());

$student1 = new Student("markous");
$student1->assignATempTeacher($teacher1);

//var_dump("markous " . $teacher1->getName() . $teacher1->evaluateStudentHomeWork($student1));
//var_dump("markous " . $teacher2->getName() . $teacher2->evaluateStudentHomeWork($student1));

// Relation Aggregation
use App\OOP\PHP\Relation\Aggregation\Developer;
use App\OOP\PHP\Relation\Aggregation\Project;

$bero = new Developer('bero');
$ibrahim = new Developer('ibrahim');

$phpProject = new Project(
  "php",
  new DateTime('now'),
  [$bero, $ibrahim]
);

//var_dump($phpProject->showProjectInformation());

// Relation Composition
use App\OOP\PHP\Relation\Composition\ComputerMachine;
use App\OOP\PHP\Relation\Composition\RAM;
use App\OOP\PHP\Relation\Composition\CPU;

$cpu = new CPU(10);
$ram = new RAM(8);

$CM = new ComputerMachine($cpu, $ram);

var_dump($CM->dashboard());










