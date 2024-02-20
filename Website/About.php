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
        .Welcome2 {
            font-size: 24px;
            color: white;
            margin-top: 20px;
        }

        .AboutText {
            font-size: 16px;
            line-height: 1.5;
            margin-top: 10px;
        }

        .Electronic {
            height: 500px;
            width: 100%;
            max-width: 600px;
            margin-top: 20px;
            display: block;
            margin: 0 auto;
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
        topnav(2, $language);
        ?>
    </section>
    <section>

        <h2 class="Welcome2">
            <?= ($ArrayOfStrings["AboutHeader"]); ?>
        </h2>
        <p class="AboutText">
            <?= ($ArrayOfStrings["AboutText"]); ?>
        </p>
        <img src="Images/AboutImage.png" class="Electronic" alt="Electronic">
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>