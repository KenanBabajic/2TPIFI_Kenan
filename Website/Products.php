<?php include "Commondiv.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?= time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
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
            box-shadow: rgba(52, 152, 219, 0.4) 5px 5px, rgba(52, 152, 219, 0.3) 10px 10px, rgba(52, 152, 219, 0.2) 15px 15px, rgba(52, 152, 219, 0.1) 20px 20px, rgba(52, 152, 219, 0.05) 25px 25px;
            margin: 20px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;

        }

        .OneProduct:hover {
            transform: scale(0.95);
            /* Slightly smaller size when selected */

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

        #Spacesection {
            padding-bottom: 100px;
        }
    </style>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop">
                <?= ($ArrayOfStrings["CommonShopName"]); ?>
            </p>
        </div>
        <?php
        topnav(4, $language);
        ?>
    </section>
    <section id="Spacesection">
        <div class="AllProducts">

            <?php
            $handle = fopen('products_list.txt', 'r');

            while (!feof($handle)) {
                $line = fgets($handle); // Read one line of text from the csv
                $product = explode(',', $line); // Assuming products are separated by commas in your file
                if (count($product) < 3)
                    continue; // Skip lines that don't have all 4 fields
                ?>
                <div class="OneProduct">
                    <img src="Images/<?= $product[2]; ?>" alt="Product Image">
                    <div class="product-details">
                        <div>
                            <?= ($ArrayOfStrings["ProductsName"]); ?>
                            <?= $product[0]; ?>
                        </div>
                        <div>
                            <?= ($ArrayOfStrings["ProductsPrice"]); ?>
                            <?= $product[3]; ?>
                        </div>
                        <div>
                            <?= ($ArrayOfStrings["ProductsDescription"]); ?>
                            <?= $product[1]; ?>
                        </div>
                        <button id="BuyShop">
                            <?= ($ArrayOfStrings["ProductsBuy"]); ?>
                        </button>

                    </div>
                </div>
                <?php
            }

            //Close the file
            fclose($handle);
            ?>
        </div>
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>