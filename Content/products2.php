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
    include "Commondiv.php"; topnav(4);
    ?>
    </section>

      <?php 
$handle = fopen('products_list.txt', 'r');

while (!feof($handle)) {
  $line = fgets($handle); // Read one line of text from the csv
  $product = explode(',', $line); // Assuming products are separated by commas in your file

  // Check if the line is not empty
  if (!empty($line)) {
    // Start a new product container with the specified style
    echo '<div class="OneProduct">';
   
    // Output product information inside the container
    foreach ($product as $info) {
      echo '<p>' . $info . '</p>';
    }

    // Add a buy button with a link or form for purchasing
    echo '<button onclick="buyProduct(' . $product[0] . ')">Buy</button>'; // Assuming the first element is a unique product identifier

    // Close the product container
    echo '</div>';
  }
}

//Close the file
fclose($handle);
      ?>
    
</body>