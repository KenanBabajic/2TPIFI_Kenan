<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">

    <title></title>
    <style>
        .AllProducts {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      align-items: center;
      padding-top: 50px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  
  .OneProduct {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
      border-radius: 10px;
      width: 400px;
      height: 400px;
      text-align: center;
      padding-top: 50px;
      border-bottom: 1px solid white;
      border-top: 1px solid white;

    }

  .OneProduct img {
      width: 400px;
      margin-bottom: 20px;
  }

  #BuyShop {
      width: 100px;
      height: 50px;
      border-radius: 10px;
      background-color: rgb(255, 255, 255);
      border: 1px solid black;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      margin-bottom: 50px;
      margin-top: 10px;
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
    include "Commondiv.php"; topnav(4, $language);
    ?>

    </section>
    <div class="AllProducts">

      <?php 
$handle = fopen('products_list.txt', 'r');

while (!feof($handle)) {
  $line = fgets($handle); // Read one line of text from the csv
  $product = explode(',', $line); // Assuming products are separated by commas in your file
  if(count($product) < 3) continue; // Skip lines that don't have all 4 fields
?>
<div class="OneProduct">
  <div>Name: <?=$product[0]; ?></div>
  <div>Price: <?=$product[3]; ?></div>
  <img src="<?=$product[2]; ?>"/>
  <div>Description:<?= ($language=="EN") ? $product[1] : $product[3] ?></div><button id="BuyShop">Buy</button>
</div>

  <?php
  }

//Close the file
fclose($handle);
      ?>
    </div>

</body>