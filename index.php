<?php

//31/10/2024
//Operators
//arithmetic operatoers
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

//increment and decrement Operators
$x++;

echo $x;

echo "<br>";

$x--;

echo $x;

//Assignment Operators
//echo "<br>";
$a = 100;
$b = 50;

//Addition assignment
$a += $b;
echo "<br>";
echo $a;
//subtraction assignment 
$a -= $b;
echo "<br>";
echo $a;
echo "<br>";

//logical operators compel and combine using a conditional statement
//Example of logical operators are; AND(&&), or (||),XOR, NOT(!)

if ($a == 100 && $b == 50){
  echo "we are good to go";
} 
echo "<br>";

if ($a == 100 || $b == 50){
    echo "we are good to go";
  }
echo "<br>";

if ($a == 100 xor $b == 55){
    echo "we are good to go";
  }
echo "<br>";

if (!($a == 101)){
    echo "we are good to go";
  }

  echo "<br>";
// 11/7/2024
// PHP conditional statements

// There are Four notable conditional statements in PHP viz

// if statement

// If... else statement 

// if...elseif... else statement

// switch statement 


// IF STATEMENT
// _____________

//The if statement is one of the most important statement in PHP

// Examples:
// ____________

if (7>3) {
  echo "Have a good day";

}

// Examples:
// variable declaration\
$my_name = "Martins";

$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";




if ($present_time >= 00.00 && $present_time <= 12.00) {
  echo "<h3> Good Morning, $my_name! </h3>";
}

elseif ($present_time >= 12.00 && $present_time <= 16.00) {
  echo "<h3> Good Afternoon, $my_name! </h3>";
}

elseif ($present_time >= 16.00 && $present_time <= 23.59) {
  echo "<h3> Good Night, $my_name! </h3>";
}

else {
  echo "<h3> Hello, $my_name! </h3>";
}
//11/8/2024
// Switch statement:

$today = date (format: "D");
echo "Today is: $today <br>";


switch ($today) {
case "Mon";
   echo "Hello everybody, it's Monday, Have a great week!";
   break;

case "Tue";
     echo "Hello everybody, it's Tuesday, Do have a splendid weekend!";
     break; 

case "Wed";
     echo "Hello everybody, it's Wedensday, Do have a wonderful weekend!";
     break; 

case "Thud"; 
     echo "Hello everybody, it's Thursday, Do have a Miraculious weekend!";
     break; 
      
case "Fri";
     echo "Hello everybody, it's Friday, Do have a Joyful weekend!";
     break; 
      
case "Sat";
     echo "Hello everybody, it's Saturday, Do have a Blessed weekend!";
     break; 

case "Sun";
     echo "Hello everybody, it's Sunday, Do have a Glorious weekend!";
     break;
default;
     echo "Sorry, this is not a day in the week!";
     
     break; 
       
} 
echo "<br>";

// 11/11/2024
// PHP LOOPS

/*$numbers = 1;

echo $numbers, "<br>";
  
$numbers++;

echo $numbers, "<br>";

$numbers++;

echo $numbers, "<br>";*/

// WHILE LOOPS

/*$numbers = 1;

while ($numbers <= 10) {
   echo $numbers, "<br>";
   $numbers++;
}*/

// DO WHILE LOOPS
/*$numbers = 11;
do {
    echo $numbers,"<br>";
     $numbers++;
} while ($numbers <= 10)*/

// create an app that print number 1 to 100, print fizz for
// multiple of 3, and buzz for multiple of 5, print fizzbuzz for multiple of 15
//FOR LOOPS

for ($numbers = 1; $numbers <= 100; $numbers++) {
   if ($numbers % 15 == 0) {
        echo "fizz <br>";
      }elseif ($numbers % 5 == 0) {
         echo "buzz <br>";
      }
        elseif ($numbers % 3 == 0) {
           echo " fizz <br>";
        }

         else {
        echo $numbers,"<br>";
     }
   
      }


   

//FOR EACH example 1

$cars = array("TOYOTA", "LEXUS", "VOLVO", "JEEP");
echo "i love $cars[0] <br>";
echo "i love $cars[1] <br>";
echo "i love $cars[2] <br>";
echo "i love $cars[3] <br>";

echo "<br>";

// for each example 2

$scar = array("TOYOTA", "LEXUS", "VOLVO", "JEEP");

foreach($cars as $car) {
 echo "i love $cars[0] <br>";

}


// 15/11/2024
// Arrays
$domesticAnimals = array("Goat", "Lion", "Hen", "Dog", "Cow");

$cities = ["Asaba", "Ugheli", "Sepele", "Agbor", "Warri"];

  echo $domesticAnimals[3],"<br><br>";

  // index arrays
  //associative arrays
  // multi-demesional arrays
  
  //count
  echo count($domesticAnimals), 
  "<br><br>";

  //array_push
  array_push($cities, "Abraka", "Effurun", "Ozoro");

  var_dump($cities);


$cities[3] = "Okpanam";

 echo "<br>";

var_dump($cities);
  

// associative array

$laptop = [ "brand" => "laptop", "model" => "hp", "color" => "White", "ROM" => 256, "year","1993"];

echo "<br><br>";

var_dump($laptop);


$laptop["model"] = "lenovo";
 
echo "<br><br>";

var_dump($laptop);


// 18/11/2024
// Function: A functon is a blockstatement that can be used repeatedly in a program...

function greetMe() {
      echo "<br><br> good afternoon";
      }

      greetMe();














?>