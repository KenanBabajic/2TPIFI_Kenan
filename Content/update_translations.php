<!DOCTYPE html>
<html lang="en">
    <?php
    include_once("commondiv.php");
    ?>
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connect</title>
</head>
 
<body>
    <?php
 /*
    //Goal 1: Connect to the database
    $connection = new mysqli("localhost", "root", "", "Websitedatabase"); //Connect the Query
   
    // $connection = mysql_connect ('localhost', 'root', '', ;test2024);
    // if (!$connection) { die ("Error creating connections");}
   
    //Goal 2: select data from the database table and display it
    $sqlQuery = $connection->prepare("SELECT * FROM Translations"); //Creat a Query
    if (!$sqlQuery)
        die("SQL Error: " . $connection->error); //Check for Errors (if any)
    $sqlQuery->execute(); //Execute the Query
    $result = $sqlQuery->get_result(); //Get the Result
    while ($row = $result->fetch_assoc()) {
            if ($language =="EN")
            {
                $ArrayOfStrings[$row["StringName"]] = $row["DescriptionEN"];
            }
            else
            {
                $ArrayOfStrings[$row["StringName"]] = $row["DescriptionFR"];
            }            
    }
 
 
    ?>
</body>
 
</html>*/