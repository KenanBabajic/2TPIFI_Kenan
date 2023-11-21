<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>


<?php

$visible = true;
//Create a PHP calculator with four options
//Addition, Subtraction, Multiplication, Division
if (isset($_GET["Calculation"])) {
    $visible = false;
    $value = $_GET["Calculation"];
switch ($value) {
    case "Add":
        print("You have selected addition" . "<br>");
        $result = $_GET["1stNumber"] + $_GET["2ndNumber"];
        echo $_GET["1stNumber"] . " + " . $_GET["2ndNumber"] . " = " . $result;
        $fileHandle = fopen("Calculations.txt", "a");
        feof($fileHandle);
    fwrite($fileHandle, $_GET["1stNumber"] . " + " . $_GET["2ndNumber"] . " = " . $result . "\n");        
        fclose($fileHandle);
        break;
    case "Substrat":
        print("You have selected substraction" . "<br>");
        $result = $_GET["1stNumber"] - $_GET["2ndNumber"];
        echo $_GET["1stNumber"] . " - " . $_GET["2ndNumber"] . " = " . $result;
        $fileHandle = fopen("Calculations.txt", "a");
        feof($fileHandle);
        fwrite($fileHandle, $_GET["1stNumber"] . " - " . $_GET["2ndNumber"] . " = " . $result . "\n");        
            fclose($fileHandle);
        break;
    case "Multiply":
        print("You have selected multiplication" . "<br>");
        $result = $_GET["1stNumber"] * $_GET["2ndNumber"];
        echo $_GET["1stNumber"] . " * " . $_GET["2ndNumber"] . " = " . $result;
        $fileHandle = fopen("Calculations.txt", "a");
        feof($fileHandle);
        fwrite($fileHandle, $_GET["1stNumber"] . " * " . $_GET["2ndNumber"] . " = " . $result . "\n");        
            fclose($fileHandle);
        break;
    case "Divide":
        print("You have selected division" . "<br>");
        $result = $_GET["1stNumber"] / $_GET["2ndNumber"];
        echo $_GET["1stNumber"] . " / " . $_GET["2ndNumber"] . " = " . $result;
        $fileHandle = fopen("Calculations.txt", "a");
        feof($fileHandle);
        fwrite($fileHandle, $_GET["1stNumber"] . " / " . $_GET["2ndNumber"] . " = " . $result . "\n");        
            fclose($fileHandle);
        break;
    default:
        print("Please select a valid option");
        echo "The result is " . $result;
        break;
    }
    $fileHandle = fopen("Calculations.txt", "r");
    echo "<br>" . "These are all the previous calculations : ";
    if ($fileHandle) {
        while (($line = fgets($fileHandle)) !== false) {
            echo "<br>" . $line;
        }
    
        fclose($fileHandle);
    }
    }
   
if($visible) {
?>
<form method="GET">
<select name="Calculation" id="Calculation">
    <option value="Add">Add</option>
    <option value="Substrat">Substract</option>
    <option value="Multiply">Multiply</option>
    <option value="Divide">Divide</option>
    <input type="number" name="1stNumber" value="1stNumber">
    <input type="number" name="2ndNumber" value="2ndNumber">
    <input type="submit" value="Submit">
</select>
</form>
<?php
}
?>
</body>
</html>