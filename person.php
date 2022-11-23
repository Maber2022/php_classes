<?php

class Person {
 private $name;
 private$lastname;
 private $age;
 private $hp;
 private $mother;
 private $father;
 private $fathergrandmom;
 private $fathergranddad;
 private $mothergrandmom;
 private $mothergranddad;

 

 function __construct($name, $lastname, $age, $mother, $father, $fathergrandmom, $fathergranddad, $mothergrandmom, $mothergranddad){
   $this->name = $name;
   $this->lastname = $lastname;
   $this->age = $age;
   $this->mother = $mother;
   $this->father = $father;
   $this->hp = 100;
   $this->fathergrandmom = $fathergrandmom;
   $this->fathergranddad = $fathergranddad;
   $this->mothergrandmom = $mothergrandmom;
   $this->mothergranddad = $mothergranddad;
 }


 function getInfo() {
    return "
    <h2> A few words about myself</h2></br><hr>
    <h3>My name is $this->name</h3></br>
    <h3>My lastname is $this->lastname</h3></br>
    <h3>My age is $this->age</h3></br>
    <h3>My Mom is $this->mother</h3></br>
    <h3>My Dad is $this->father</h3></br>
    <h3>My Granny by Dad is $this->fathergrandmom</h3></br>
    <h3>My Grandpa by Dad is $this->fathergranddad</h3></br>
    <h3>My Granny by Mom is $this->mothergrandmom</h3></br>
    <h3>My Grandpa by Mom is $this->mothergranddad</h3></br>
    ";
}
}

$dasha = new Person("Masha","Petrova",25,"Anna","Petr","Elza","Albert","Bella","David");



echo $dasha->getInfo();



// class Man{
//     private $name;
//     private $age;

//     function __construct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function getInfo(){
//         return "<h1>${$this->name},  ${$this->age}</h1>";
//     }
// }


// $man = new Man("ivan",33);
// echo $man->getInfo();





// $igor = new Person("Igor", "Petrov", 38);



// $Alex = new Person("Alex", "Ivanov", 42);
// $olga = new Person("Alex", "Ivanov", 42);
// $valera = new Person("Alex", "Ivanov", 15, $Olga, $alex);


// echo $valera->getInfo

// echo $valera->mother ->getName()->getFather()->getName;








// $medKit = 50;
// $alex ->hp = $alex->hp - 30; //упал
// $alex->setHp(-30);
// echo $alex->getHp() ."<br>";
// // $alex->hp = $alex->hp + $medKit; //Нашел аптечку
//   $alex->setHp($medKit);
// echo $alex->grtHp();




// echo $Alex->sayHi($igor->nm=ame);







// echo $Alex->name;
// $Alex->name = "Alex";


//  function sayHi($name) {
//     return "Hi $name, Im ". $this->name;
//  }
//   function setHp($hp) {
//     if($this->hp + $hp >= 100) {$this->hp = 100;}
//     else {$this->hp = $this->hp + $hp;}
//   }
//   function getHp()
//    {
//     return $this->hp;
//   }
//   function getName() {
//     return $this->name;
//   }
//   function getMother() {
//     return $this->getMother;
//  }
//  function getFather() {
//     return $this->getFather;
//  }