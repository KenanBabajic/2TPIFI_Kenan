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
        .HomeContent {
            width: 100%;
            height: auto;
            overflow: hidden;
            margin-left: 10%;
        }

        .HomeContent img {
            width: 25%;
            height: 25%;
        }

        .WelcomeHome {
            font-size: 24px;
            color: white;
            margin-top: 20px;
        }

        div.scroll-container {
            background-color: black;
            overflow: auto;
            white-space: nowrap;
            padding: 10px;
            height: 450px;
            border-top: 1px solid white;
            border-bottom: 1px solid white;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
        }

        div.scroll-container img {
            height: 400px;
        }

        img {
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        img:hover {
            transform: scale(1.2);
            /* Slightly smaller size when selected */

        }
    </style>
    <title></title>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop">
                <?= ($ArrayOfStrings["CommonShopName"]); ?>
            </p>
        </div>
        <?php
        topnav(1, $language);
        ?>
    </section>
    <section>

        <div class="scroll-container">
            <p class="WelcomeHome">
                <?= ($ArrayOfStrings["HomeHeader"]); ?>
            </p>

            <img src="Images/OMEN.png">
            <img src="Images/MSI2.png">
            <img src="Images/Samsung24.png">
        </div>
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>