<?php
include "Commondiv.php";

// Establish database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "Websitedatabase"; // Your MySQL database name
$db = new mysqli($servername, $username, $password, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in and has a valid UserId
if(!isset($_SESSION["UserLoggedIn"])) {
    header("Location: login.php");

    exit;
}

// Fetch user's order history from the database view
$userName = $_SESSION["UserName"];
// Assuming $db is your mysqli connection
// $stmt = $db->prepare("SELECT * FROM userstoproducts WHERE UserName = ?");
//$stmt->bind_param("s", $_SESSION["UserName"]);
//$stmt->execute();
//$result = $stmt->get_result();

// Fetch data from the result set, display results, etc.

$is_admin = false;
if (isset($_SESSION["UserRole"]) && $_SESSION["UserRole"] === "Admin") {
    $is_admin = true;
}

// Construct SQL query based on user role
if ($is_admin) {
    // User is an admin, retrieve all orders
 $fetchUserIdQuery = "SELECT * FROM userstoproducts";
 
} else {
    // User is not an admin, retrieve orders associated with their user ID
    $stmt = $db->prepare("SELECT * FROM userstoproducts WHERE UserName = ?");
    $stmt->bind_param("s", $_SESSION["UserName"]);
    $stmt->execute();
$result = $stmt->get_result();
}


// Check if query execution was successful
if (!$result) {
    echo "Error executing query: " . $db->error;
    exit;
}

// Display order history
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
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
        topnav(8, $language);
        ?>

    </section>
<h1>Your Order History</h1>
<table>
    <tr>
    <th>User Name</th>
        <th>Order ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <!-- Add more columns as needed -->
    </tr>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["UserName"] . "</td>";
            echo "<td>" . $row["OrderId"] . "</td>";
            echo "<td>" . $row["Product_Name"] . "</td>";
            echo "<td>" . $row["CountOfItemsBought"] . "</td>";
            echo "<td>" . $row["Price"] . "</td>";
            // Add more columns as needed
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No orders found.</td></tr>";
    }
    ?>
</table>
</body>
</html>
