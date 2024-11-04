<?php 
//prints out a word
echo "Hello<br>";

//define and prints out the variable
$result = 80;
$grade = 'A';
echo "Your result is " . $result . " with grade " . $grade . "<br>";

//if else statement
$result2 = 40;
if($result2 >= 50){
    echo "The result is ".$result2." You Passed. <br>" ;
}
else{
    echo "The result is ".$result2. " You failed. <br>";
}

// Create a loop that prints "Lesson 0-4" five times
for ($i = 1; $i <= 5; $i++) {
    echo "This is Lesson " .$i."<br>";
}

//create a while loop with a variable that prints out 1 to 5
$number = 1;
while ($number <= 5) {
    echo "Number " .$number. "<br>";
    $number++;
}

// make an array that prints array randomly in each line
$phpArray = ["Web Dev", "Database", "AI", "Project", "OOP"];
shuffle($phpArray);
foreach ($phpArray as $item) {
    echo $item . "<br>";
}

$car=array("Toyota", "Honda", "Myvi");
echo "I like " .$car[0]. ", He likes " .$car[1]. ", She likes " .$car[2]. ". <br>";

//Associative Array
$studentAge = [
    "John" => "15",
    "Jane" => "20",
    "Doe" => "25"
];
    echo "John is " .$studentAge["John"]. " years old <br>";
    echo "Jane is " .$studentAge["Jane"]. " years old <br>";
    echo "Doe is " .$studentAge["Doe"]. " years old <br>";

//Multidimention Array
$cars=array(
    array("Toyota", 22, 20),
    array("Honda", 27, 25),
    array("Myvi", 30 , 30)
);
echo $cars[0][0]. " in stock: " .$cars[0][1]. " sold: " .$cars[0][2]. "<br>";
echo $cars[1][0]. " in stock: " .$cars[1][1]. " sold: " .$cars[1][2]. "<br>";
echo $cars[2][0]. " in stock: " .$cars[2][1]. " sold: " .$cars[2][2]. "<br>";

?>