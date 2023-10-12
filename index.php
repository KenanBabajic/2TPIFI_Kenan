<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		td {
			text-align: center;
		}

		table {
			border: 1px solid black;
		}

		tr {
			border-right: 1px solid black;
		}
	</style>
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
/* $firstname = "Kenan";
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

	$MyArray = [0,5,20,30];

echo $MyArray[1];

for ( $i=0; $i<count($MyArray); $i++) {
	print($MyArray[$i]);

}
*/
/*

<table>
	<tr>
		<th>Age</th>
		<th>Classmates</th>
	</tr>
	<?php
	$Age = [20, 19, 18, 21];
	$TableArray = ["Kenan", "Igor", "Maw", "Dominic"];

for ($i=0; $i<count($TableArray); $i++) {
print("<tr> <td>".$Age[$i]. "</td> <td>". $TableArray[$i]. "</td></tr>");	
}
?>
</table> */
?>
<table>
	<tr>
		<th>Percentage of pullin a girl</th>
		<th>Blud</th>
	</tr>
	<?php
	$Age = [20, 19, 18, 21];
	$TableArray = ["Kenan", "Igor"];
	$PercentageArray = [];
for ($i=0; $i<count($TableArray); $i++) {
	$Percentage = (rand(0,100));

	array_push($PercentageArray, $Percentage);
	?>
	<tr>
		<td><?= $PercentageArray[$i] . "%" ?></td>
		<td><?= $TableArray[$i]; ?></td>

	</tr>
<?php
}
?>
<?php
// To put them together in javascript - firstname + " " + secondname;



$hello = "Hello world";
$Hello = "Hello bruv";

	?>
</body>
</html>