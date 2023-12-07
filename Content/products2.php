<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva,
                Verdana, sans-serif;
            background-color: black;
        }

        .Bgimg {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .ElectronicsShop {
            font-size: 100px;
            margin: 0;
        }

        section {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            padding: 20px;
        }

        .top-nav {
            background-color: #333;
            overflow: hidden;
        }

        .top-nav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .top-nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .AllProducts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            padding-top: 50px;
        }

        .OneProduct {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 10px;
            width: 400px;
            height: 500px;
            text-align: center;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .OneProduct img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .product-details {
            padding: 20px;
            color: black;
        }

        #BuyShop {
            width: 100px;
            height: 50px;
            border-radius: 10px;
            background-color: #3498db;
            border: none;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop">Electronics Shop</p>
        </div>
        <?php include "Commondiv.php";
        topnav(4, $language);
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
            <img src="<?=$product[2]; ?>" alt="Product Image">
            <div class="product-details">
                <div>Name: <?=$product[0]; ?></div>
                <div>Price: <?=$product[3]; ?></div>
                <div>Description:<?= ($language=="EN") ? $product[1] : $product[3] ?></div>
                <button id="BuyShop">Buy</button>
            </div>
        </div>
        <?php
  }

//Close the file
fclose($handle);
?>
    </div>

</body>

</html>
