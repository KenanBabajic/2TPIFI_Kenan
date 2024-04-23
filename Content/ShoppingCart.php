<?php include "Commondiv.php"; ?>
<?php include "Home.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        topnav(7, $language);

    if(!isset($_SESSION["UserLoggedIn"])) {
        die("Forbidden, can't be here");
    }


    ?>

    <h1>List of items you added to the shopping cart:</h1>

    <table>
        <tr>
            <th>Product Id
            </th>
            <th>Count</th>
        </tr>
        <?php
        foreach($_SESSION["ShoppingCart"] as $key => $value) {
            echo "<tr> <td>" . $key . "</td> <td>" . $value . "</td></tr>";
        }

        ?>
    </table>
</body>
</html>