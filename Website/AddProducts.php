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
        .Electronic {
            width: 100%;
            max-width: 600px;
            margin-top: 20px;
        }

        div.message {
            margin-top: 10px;
            color: #ff0000;
        }

        form {
            color: black;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin: auto;
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            box-shadow: rgba(52, 152, 219, 0.4) 5px 5px, rgba(52, 152, 219, 0.3) 10px 10px, rgba(52, 152, 219, 0.2) 15px 15px, rgba(52, 152, 219, 0.1) 20px 20px, rgba(52, 152, 219, 0.05) 25px 25px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #2980b9;
        }

        form:hover {
            transform: scale(0.95);
            /* Slightly smaller size when selected */

        }
    </style>
    <title></title>
</head>

<body>
    <?php

    $registrationMessage = '';

    if (isset($_POST['productName']) && $_POST['productDescription'] && $_POST['productImage'] && $_POST['productPrice']) {
        $fileHandle = fopen("products_list.txt", "a");
        $newLineForUser = $_POST["productName"] . "," . $_POST["productDescription"] . "," . $_POST["productImage"] . "," . $_POST["productPrice"] . "€" . "\n";
        fputs($fileHandle, $newLineForUser);
        fclose($fileHandle);
        $registrationMessage = "Product added successfully";

    }
    ?>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop">
                <?= ($ArrayOfStrings["CommonShopName"]); ?>
            </p>
        </div>
        <?php
        topnav(6, $language);
        ?>


        <form method="POST">
            <label for="productName">
                <?= ($ArrayOfStrings["AddProducts-ProductName"]); ?>
            </label>
            <input type="text" name="productName" required><br>

            <label for="productDescription">
                <?= ($ArrayOfStrings["AddProducts-ProductDescription"]); ?>
            </label>
            <input type="text" name="productDescription" required><br>

            <label for="productImage">
                <?= ($ArrayOfStrings["AddProducts-ProductImage"]); ?>
            </label>
            <input type="text" name="productImage" required><br>

            <label for="productPrice">
                <?= ($ArrayOfStrings["AddProducts-ProductPrice"]); ?>
            </label>
            <input type="text" name="productPrice" required><br>

            <input type="submit" name="addProduct" value="<?= ($ArrayOfStrings["AddProducts-Addbutton"]); ?>">
            <div class="message">
                <?php echo $registrationMessage; ?>
            </div>
        </form>
        <footer>
            <p>HTML Babajic Kenan 2022</p>
        </footer>
</body>

</html>