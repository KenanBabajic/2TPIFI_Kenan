<?php include "Commondiv.php";
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<style>
      body {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif; /* Updated font */
            background-color: black;
            color: white;
        }

        .Bgimg {
            background: black; /* Add your pattern background */
    color: white;
    text-align: center;
    padding: 50px;
    position: relative;
    overflow: hidden; /* Hide overflowing content */
}

.Bgimg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.2; /* Adjust the opacity of the pattern */
}


        .ElectronicsShop {
            font-size: 100px;
            margin: 0;
            background-color: #000; /* Set the background color to black */
            color: #3498db; /* Set the text color to blue */
            padding: 20px; /* Add some padding for better visibility */
            border-radius: 10px; /* Add rounded corners */
            animation: colorChange 5s infinite alternate; /* Add animation */
        }
        
        @keyframes colorChange {
            0% {
                background-color: #000;
                color: #3498db;
            }
            100% {
                background-color: #3498db;
                color: #000;
            }
        }
        section {
            background: black;
        }

        .top-nav {
            background-color: #333;
            overflow: hidden;
        }

        .top-nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 14px;
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
            margin-bottom: 20px;
        }
    </style>
<body>
<section>
        <div class="Bgimg">
            <p class="ElectronicsShop">
                <?= ($ArrayOfStrings["CommonShopName"]); ?>
            </p>
        </div>
        <?php
        topnav(7, $language);
        ?>

    </section>
<?php
    if(!isset($_SESSION["UserLoggedIn"])) {
        die("Forbidden, can't be here");
    }


    // Assuming $_SESSION['cart'] contains the cart items
    
    // Loop through items in the cart
   /* foreach ($_SESSION['cart'] as $productID => $quantity) {
        // Fetch product details from the database based on $productID
        $query = "SELECT * FROM Products WHERE Product_ID = $productID";
        $result = mysqli_query($conn, $query);
    
        // Check if product exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    
            // Display product details
            echo '<div class="OneProduct">';
            echo '<img src="' . $row["Image"] . '" alt="' . $row["Product_Name"] . '" style="max-width: 300px;">';
            echo '<div class="product-details">';
            echo '<strong>' . $row["Product_Name"] . '</strong>';
            echo '<div><strong>Description:</strong> ' . $row["Description"] . '</div>';
            echo '<div><strong>Price:</strong> ' . $row["Price"] . '€</div>';
            echo '<div>Quantity in Cart: ' . $quantity . '</div>';
            // Add button to remove item from cart if needed
            
           
        }
    }
    */
    if(isset($_POST['removeAll'])) {
        // Clear the entire cart
        unset($_SESSION['cart']);
    }
?>

 
<?php
    // Display shopping cart items
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<h2>Shopping Cart:</h2>";
        foreach ($_SESSION['cart'] as $productID => $quantity) {
            echo "Product ID: $productID, Quantity: $quantity <br>";
        }
    } else {
        echo "Your shopping cart is empty.";
    }
        if (!empty($_SESSION['cart'])) {
?>
           <form method="POST">
    <button type="submit" name="removeAll" id="BuyShop">Remove All</button>
    </form>
    <?php
    }
    ?>
    </table>
</body>
</html>