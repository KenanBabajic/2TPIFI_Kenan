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

    //GOAL 1: connect to the database
    $connection = new mysqli("localhost","root","","Test2024"); // Connect to the Database

    //GOAL 2: select data from my table of clients and display it.
    $sqlQuery = $connection->prepare("SELECT * from Clients"); // Create a query
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