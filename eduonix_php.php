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