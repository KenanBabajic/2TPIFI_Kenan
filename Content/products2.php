<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">
    <script src="Script.js"></script>
    <title></title>
    <style>
        .AllProducts {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      align-items: center;
  }
  
  .OneProduct {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
      border: 1px solid blue;
      border-radius: 10px;
      width: 200px;
      height: 300px;
      background-color: red;
  }
  
    </style>
</head>
<body>
    <section>
    <div class="Bgimg">
        <p class="ElectronicsShop">Electronics Shop</p>
        <a href="HomeFR.php"><img src="FrenchFlag.png" alt="" height="100px" width="100px"></a>
    </div>
    <?php
    include "Commondiv.php"; topnav(1);
    ?>

    <h1>Yo</h1>

      <?php 
//Open a text file
$handle = fopen("Book1.csv", "r");
fgets($handle);

//Read from the file - line by line
while(!feof($handle)) {
    $line = fgets($handle); //This will read one line of the text
$pieces = explode(";", $line);
?>
<div class="AllProducts">
    <div class="OneProduct">
    <div>Price: <?=$pieces[1]?>Euro/piece</div>
    <img src="<?php$pieces[3]?>" alt=""/ height="150px">
    <div>Desciption: <?=$pieces[2]?></div>
    </div>
    </div>
    <?php


        ?>
   
    <?php
}
//Close the file
fclose($handle);
      ?>
    </div>
</body>