<?php
/* PHP FILE FOR LEARNING PHP */
echo "Jeril Varghese";
// following is the way to define a constant
define('HOSTNAME', 'localhost');
echo('<br>'.HOSTNAME);
// declaring and using variables
$name = 'jeril varghese';
echo('<br>'.$name.'<br>');
// Define an array in php
$users = Array('jeril', 'ajoy', 'jithin');
echo '<br>'.$users;
print_r($users);

// Associative arrays 
$students = Array('jeril'=>28,
                'ajoy'=>26,
                'jithin'=>25);
echo('<br><br>accessing value of a key<br>');
echo($students['jeril']);

// Functions in php
function printMsg(){
    echo '<br>Hello world!!';
}


function printString($msg){
    echo '<br>'.$msg;
}

//function with default argument
function printSomething($msg='Print something....'){
    echo '<br>'.$msg;
}

printMsg();

printString('Hello Jeril Varghese');

printSomething();
printSomething('This will print this..');
echo '<br>';
// Loops and conditionals in php
for($i=0; $i<10; $i++){
    if($i%2 == 0){
        echo $i.' is even<br>';
    }else{
        echo $i.' is odd<br>';
    }
}

// traversing through an array
echo '<br><br>Traversing through an array using foreach<br>';
foreach($users as $user){
    echo $user.'<br>';
}

// learning variables 
echo '<br>Learn variables through examples<br>';
$my_string = 'its a string';
var_dump($my_string);

echo '<br>';
$myInt = 10;
var_dump($myInt);

echo '<br>';
$myFloat = 8.3;
var_dump($myFloat);

echo '<br>';
$myBool = true;
var_dump($myBool);

echo '<br>';
$myArray = Array(3,5,5,2);
var_dump($myArray);

echo '<br>';
$myNull = null;
var_dump($myNull);

// strings
echo '<br>';
$my_string = "Is a string";
// getting length of a string using strlen
echo '<br>length of string using strlen(string) is: '.strlen($my_string);
// for getting  word count of a string str_word_count
echo '<br>word count of string using str_word_count(string) is: '.str_word_count($my_string);
// reversing a string
$temp = $my_string;
echo '<br>reversing string using strrev(string): '.strrev($temp);
// getting position of a particular word in string
echo "<br>position of 'a' in string using strpos(string, substring): ".strpos($my_string, 'a');
// replacing a word in string
echo "<br>replace 'a' with 'not a' using str_replace('a', 'not a', string): ".str_replace('a', 'not a', $my_string);

echo '<br><br>list of functions for numbers: <br>max()<br>min()<br>abs()<br>floor()<br>ceil()<br>rand(a,b)';
//Date in php
echo '<br>Date is: '.date('d/m/y').", format used: 'd/m/y'";
echo '<br>Date is: '.date('d/m/yy').", format used: 'd/m/yy'";
echo '<br>Day is: '.date('l').", format used: 'l'";
echo '<br>Month is: '.date('m').", format used: 'm'";
echo '<br>month is: '.date('M').", format used: 'M'";
echo '<br>year is: '.date('yy').", format used: 'yy'";
echo '<br>time is: '.date('h:i:sa').", format used: 'h:i:sa'";
echo '<br>time is: '.date('d/m/y',strtotime("tomorrow"));