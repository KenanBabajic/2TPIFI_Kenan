<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

/* print "Hello World"; - Echo and print are the same 
Commands must have ; at the end 
Variables must begin with a $ */

// STRING : "Hello World";
// Integer : 1,2,3,4,5,6,7,8,9,10...
// Boolean : True or false
// Array : {"Hello","bRUH"}
// Object : {"name": "Hello World"} - There are methods inside.
// NULL : null
$firstname = "Kenan";
$familyname = "Babajic";
$fakeString = "1223";

// $numberfromString = intval($fakeString); - one option to convert
$numberfromString = (int)$fakeString; 
print($numberfromString);
print("<br>");
$fullname = $firstname . " " . $familyname;
$number = 0;

for ($i=0;$i < 1000; $i++) {

	if ($i % 2 != 0) {
		$number = $number + $i;
	}
	}
	print "The sum of the first 1000 odd numbers is " . $number;
	print ("<br>");




// To put them together in javascript - firstname + " " + secondname;


print $fullname;

$hello = "Hello world";
$Hello = "Hello bruv";

	?>
</body>
</html>