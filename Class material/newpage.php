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
//Recap of associvative arrays :

$ppl = ["John" => 20, "Mary" => 30, "Kenan" => 40]; //Attention to the =>, this is not a numerically indexed array

//Iterating over the values of the array
foreach($ppl as $value) {
    print $value. "<br>";
}

// print_r($ppl);
var_dump($ppl);

//Iterating over the keys and values of the array
foreach($ppl as $key => &$value) {
    // print $key . " is " . $value . " years old <br>";
    $value = 3;
}
print("<br>");
// print_r($ppl);
var_dump($ppl);

$blud = "Blud Bludski";
print("<br>");
var_dump($blud);

//if we put &$value and sey $value = 3 and print it; it will change 
//the  value of all the ages in the array
//print_r is what are the content of the array

?>
</body>
</html>