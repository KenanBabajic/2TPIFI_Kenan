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
$a = 30;

if(isset($a)) {
    print("The variable exists");

} else {
    print("The value is not set");
}

if (isset($_GET["XAdd"], $_GET["YAdd"])) { //checks if they are set
    if(is_numeric($_GET["XAdd"]) && is_numeric($_GET["YAdd"])) { //checks if they are numbers
    ?>
    <h1><?=(int)$_GET["XAdd"] ?> + <?= (int)$_GET["YAdd"] ?> = <?= (int)$_GET["XAdd"] + (int)$_GET["YAdd"] ?></h1>
    <?php
}
}
if (isset($_GET["XSubtract"], $_GET["YSubtract"])){
    if(is_numeric($_GET["XSubtract"]) && is_numeric($_GET["YSubtract"])) { //checks if they are numbers
    ?>
    <h1><?=(int)$_GET["XSubtract"] ?> - <?= (int)$_GET["YSubtract"] ?> = <?= (int)$_GET["XSubtract"] - (int)$_GET["YSubtract"] ?></h1>
    <?php
    }
}

    ?>
    ADD
    <form method="GET">
        Please enter 2 numbers:
        <input type="number" name="XAdd">
        <input type="number" name="YAdd">
        <input type="submit" value="Submit">
    </form>
    SUBTRACT
    <form method="GET">
        Please enter 2 numbers:
        <input type="number" name="XSubtract">
        <input type="number" name="YSubtract">
        <input type="submit" value="Submit">
    </form>
   
<?php
/* Isset in php

is an instruction that checks if a variable has bee nset or not
*/

// EXERCISE : Create a single PHP Page with a button inside a form that when it's clicked will disappear
?>

</body>

</html>