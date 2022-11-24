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

 function __construct($name,
                    $lastname,
                    $age,
                    $mother = "Unknown",
                    $father= "Unknown",
                    $fathergrandmom= "Unknown",
                    $fathergranddad= "Unknown",
                    $mothergrandmom= "Unknown",
                    $mothergranddad= "Unknown"){
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
    $baseInfo = "<h2> Несколько слов обо мне:</h2></br><hr>
    <h3>Меня зовут $this->name</h3></br>
    <h3>Моя фамилия $this->lastname</h3></br>
    <h3>Мой возраст $this->age лет</h3></br>";
    $parentsInfo;
    if($this->mother !== "Unknown" && $this->father!== "Unknown"){
            $parentsInfo="<h3>Моя мама $this->mother</h3></br>
                          <h3>Мой папа $this->father</h3></br>";
    } else {
        $parentsInfo="";
    }
    $grandParentsInfo;
    if($this->fathergrandmom !== "Unknown" && $this->fathergranddad!== "Unknown"&&
        $this->mothergrandmom !== "Unknown" && $this->mothergranddad!== "Unknown"){
            $grandParentsInfo="<h3>Моя бабушка по отцу $this->fathergrandmom</h3></br>
            <h3>Мой дедушка по отцу $this->fathergranddad</h3></br>
            <h3>Моя бабушка по матери $this->mothergrandmom</h3></br>
            <h3>Мой дедушка по матери $this->mothergranddad</h3></br>";
    } else {
        $grandParentsInfo="";
    }
    return "$baseInfo $parentsInfo $grandParentsInfo";
    }
};

$masha = new Person("Мария","Петрова",25,"Анна Альбертовна","Петр Давидович","Эльза Просфирьевна","Альберт Феоктистович","Белла Потаповна","Давид Иванович");
$anna = new Person("Анна","Петрова",50,"Эльза Просфирьевна","Альберт Феоктистович");
$petr = new Person("Петр","Петров",55,"Белла Потаповна","Давид Иванович");
$elza = new Person("Эльза","Иванова",70);
$albert = new Person("Альберт","Иванов",73);
$bella = new Person("Белла","Петрова",71);
$david = new Person("Давид","Петров",74);


echo $masha->getInfo();


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
