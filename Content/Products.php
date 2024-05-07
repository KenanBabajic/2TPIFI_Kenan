<?php include "Commondiv.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif; /* Updated font */
            background-color: black;
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
            background-color: black; /* Set the background color to black */
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
            box-shadow: rgba(52, 152, 219, 0.4) 5px 5px, rgba(52, 152, 219, 0.3) 10px 10px, rgba(52, 152, 219, 0.2) 15px 15px, rgba(52, 152, 219, 0.1) 20px 20px, rgba(52, 152, 219, 0.05) 25px 25px;
            margin: 20px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;

        }

        .OneProduct:hover {
            transform: scale(0.95); /* Slightly smaller size when selected */

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
            margin-bottom: 20px;
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
        #Spacesection {
            padding-bottom: 100px;
        }
    </style>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop"><?=($ArrayOfStrings["CommonShopName"]);?></p>
        </div>
        <?php
        topnav(4, $language);
        ?>
        </section>
    <section id="Spacesection">
    <div class="AllProducts">

        <?php
        /*
$handle = fopen('products_list.txt', 'r');
while (!feof($handle)) {
  $line = fgets($handle); // Read one line of text from the csv
  $product = explode(',', $line); // Assuming products are separated by commas in your file
  if(count($product) < 3) continue; // Skip lines that don't have all 4 fields
  */
  $servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "Websitedatabase"; // Your MySQL database name
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the Products table
$sql = "SELECT * FROM Products";
$result = $conn->query($sql);
$totalItemsInCart = 0;
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $totalItemsInCart = array_sum($_SESSION['cart']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buy'])) {
    $productID = $_POST['productID'];
    $quantity = 1; 
    $_SESSION['cart'][$productID] = isset($_SESSION['cart'][$productID]) ? $_SESSION['cart'][$productID] + $quantity : $quantity;
}
// Display products
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $quantityInCart = 0;
        if(isset($_SESSION['cart'][$row["Product_ID"]])) {
            $quantityInCart = $_SESSION['cart'][$row["Product_ID"]];
        }

        ?>
        <div class="OneProduct">
        <img src="<?php echo $row["Image"]; ?>" alt="<?php echo $row["Product_Name"]; ?>" style="max-width: 300px;">
        <div class="product-details">
            <?php echo $row["Product_Name"]; ?>
            <div><strong>Description:</strong> <?php echo $row["Description"]; ?></div>
            <div><strong>Price:</strong> <?php echo $row["Price"]; ?>€</div>
            <form method="POST">
    <input name="productID" value="<?php echo $row["Product_ID"]; ?>" type="hidden">
    <input type="submit" name="buy" value="BUY" id="BuyShop" <?=($ArrayOfStrings["ProductsBuy"]);?>>
            </form>
            <div>Quantity in Cart: <?php echo $quantityInCart; ?></div>
            </div>

        </div>
        <?php
    }
} else {
    echo "0 results";
}


// Close connection
$conn->close();
?>
<?php
/*
?>
        <div class="OneProduct">
            <img src="Images/<?=$product[2]; ?>" alt="Product Image">
            <div class="product-details">
                <div><?=($ArrayOfStrings["ProductsName"]);?> <?=$product[0]; ?></div>
                <div><?=($ArrayOfStrings["ProductsPrice"]);?> <?=$product[3]; ?></div>
                <div><?=($ArrayOfStrings["ProductsDescription"]);?> <?= $product[1];?></div>
                <button id="BuyShop"><?=($ArrayOfStrings["ProductsBuy"]);?></button>

            </div>
        </div>
        <?php
  }

//Close the file
fclose($handle);
?>
*/
?>

    </div>
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>
