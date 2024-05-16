<?php
include "Commondiv.php";

// Check if an item needs to be removed from the cart
if (isset($_POST["itemtodrop"])) {
    $_SESSION['cart'][$_POST["itemtodrop"]]--;
    if ($_SESSION['cart'][$_POST["itemtodrop"]] == 0) {
        unset($_SESSION['cart'][$_POST["itemtodrop"]]);
    }
}

// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "Websitedatabase"; // Your MySQL database name
$db = new mysqli($servername, $username, $password, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_SESSION["UserLoggedIn"])) {
    die("Forbidden, can't be here");
}

// Handle removing all items from the cart
if (isset($_POST['removeAll'])) {
    unset($_SESSION['cart']);
}

// Handle placing the final order
if (isset($_POST["FinalOrder"])) {
    // Insert into Orders table
    $userId = $_SESSION["UserLoggedIn"];
    $insertOrderQuery = "INSERT INTO Orders(UserId) SELECT UserId FROM Users WHERE UserName = ?";
    if ($db->query($insertOrderQuery) === TRUE) {
        // Get the generated OrderId
        $orderId = $db->insert_id;

        // Loop through items in the cart and insert into List table
        foreach ($_SESSION['cart'] as $productID => $quantity) {
            $insertListQuery = "INSERT INTO List (OrderId, Product_ID, CountOfItemsBought) VALUES ($orderId, $productID, $quantity)";
            $db->query($insertListQuery);
        }

        // Clear the cart after placing the order
        unset($_SESSION['cart']);

        // Redirect to a thank you page or display a success message
        echo "Thank you for your order!";
    } else {
        echo "Error: " . $insertOrderQuery . "<br>" . $db->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?= time(); ?>">
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
    // Display shopping cart items
    if (!empty($_SESSION['cart'])) {
        echo "<h2>Shopping Cart:</h2>";
        foreach ($_SESSION['cart'] as $productID => $quantity) {
            // Fetch product details from database
            $query = "SELECT * FROM Products WHERE Product_ID = $productID";
            $result = $db->query($query);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $productName = $row['Product_Name'];
                $productImage = $row['Image'];
                $productPrice = $row['Price'];

                // Display product details including image
                echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
                echo "<img src='$productImage' alt='$productName' style='height: 400px;'>";
                echo "<p>Product Name: $productName</p>";
                echo "<p>Product Price: $productPrice Euros</p>";
                echo "<p>Quantity: $quantity</p>";
                echo "</div>";
            }
        }
        ?>
        <form method="POST">
            <button type="submit" name="removeAll" id="BuyShop">Remove All</button>
            <button type="submit" name="FinalOrder" id="BuyShop">Place Order</button>
        </form>
    <?php
    }