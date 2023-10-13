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

		.coloredBox {
			height: 20px;
		width: 20px;
		display: inline-block;
			background-color: green;
		}

		.Exercise {
			display: inline-block;
			padding-right: 10px;
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
		<th>Percentage</th>
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
<td>
	<?php
	for($j=0; $j<count($TableArray); $j++) {
		?>
		<div class="coloredBox"></div>
		<?php
	}
	?>
</td>
	</tr>
<?php
}
?>
<table>


<h2>Non numerically indexed arrays</h2>
<p>Build an array of people names and age:
	Option 1 using arrays: BAD OPTION. The indices of these arrays are numbers that start with 0
</p>
<?php
$names = ["John","Mary","Peter","Jane"];
$age = [20,30,40];

?>

Option 2:
-Good option, using one array:

the indices of this array are STRINGS.

<?php

$ppl = ["John" => 20, "Mary" => 30, "Joe" => 40, "Jane" => 50]; //Attention to the => , this is not a numerically indexed array
//Which means that code like:
//print $ppl[0]; // will not work

// instead we need to use :
// print $ppl["John"]; - This will work

//Called associative array
//question: how do we retrieve all the elements of this array?

// We need to use FOREACH loop

foreach ($ppl as $name => $age) {
	print "Name: ".$name." - Age:". $age.  "<br>";
}

/* An associative array is made of PAIRs of elements, first is the KEY and second is the Value.

in the above example:
-"John" is the key
- 20 is the value

The sign & is called an amperstand and it is used to pass a variable by reference.

/* array_pop($TableArray); - it shows the last array element and pops it out*/

function Test($parameter) {
	$parameter = 100;
}

$x = 1;
Test($x);
print $x . "<br>";

// this is called pass by value of a variable and is Most widely used method for passing variables to functions.
// there is another way of passing variables to functions and it is called pass by reference

function Test2(&$parameter) {
}

$x = 1;
Test2($x); // this will change the value of x to 100
?>
print $x;

<br>
<?php

$arrTest = array(1,2,3,4);
foreach($arrTest as $value) {
	$value = $value * 2;
}

// how to create new elements in an associative array
// We already have this array
$ppl2 = [];
// we need to add a new element to this array("Angelina" => 60)
$ppl2["Angelina"] = 60;
$ppl["John"] = 20;
$ppl["Kenan"] = 30;
$ppl["Brad"] = 40;
$ppl["Ben"] = 30;
$ppl["Maw"] = 40;
// that is why the names above are called Keys -> the main property of a key is that it's unique

$NameToHeight = ["Kenan" => 193, "Maw" => 100, "Igor" => 150, "Ben" => 160];
foreach ($NameToHeight as $Name => $Height) {
	
	?>
	<div class="Exercise"><?= $Name?></div><div class="Exercise"><?= $Height?></div><br>
<?php

}


$arr = [10,25,30,21,65,24,20];
$newItemforarray = 100;
array_push($arr, $newItemforarray);
$retVal = array_pop($arr);


?>
	
</body>
</html>