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

error_reporting(0); // To disable the rusty ahh errors
// $connection = new mysqli("localhost","root","","Test2024") or die("Database is closed"); // Connect to the Database

    //GOAL 1: connect to the database
    mysqli_report(MYSQLI_REPORT_OFF);

$connection = mysqli_connect("localhost","root","","Test2024");

 if (!$connection) {
    die("Error creating connection");
 }

   /* $connection = @mysqli_connect("localhost","root","","Test2024");
    }catch (Exception $e) {
        die("Error occured while connecting to the database");
    }*/
    
    //GOAL 2: select data from my table of clients and display it.
    $sqlQuery = $connection->prepare("SELECT * from Clients"); // Create a query
    if(!$sqlQuery) {
        die("Error creating the sql query");
    }
    $sqlQuery->execute(); // Execute the query
    $result = $sqlQuery->get_result(); // Get the result back from the Database
    while($row=$result->fetch_assoc()) { // Get result from each line
?>
<div>Client id: <?=$row["ClientId"]?>Client name: <?=$row["ClientName"]?></div>
<?php
    }
    ?>
</body>
</html>