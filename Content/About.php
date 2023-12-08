<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva,
                Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        .Bgimg {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            color: black;
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
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .top-nav a:hover {
            background-color: #ddd;
            color: black;
        }

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
            width: 100%;
            max-width: 600px;
            margin-top: 20px;
        }

        .AboutText2 {
            font-size: 16px;
            line-height: 1.5;
            margin-top: 20px;
        }

        footer {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title></title>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop">Electronics Shop</p>
        </div>
        <?php include "Commondiv.php";
        topnav(2, $language);
        ?>
    </section>
    <section>
        <h2 class="Welcome2">Electronics Shop - Your Electronics Marketplace #1</h2>
        <p class="AboutText">ElectronicsShop is an electronics marketplace of unique and creative products. <br>
            You must be wondering how we differ from other marketplaces? <br>
            ElectronicsShop was established with a simple idea: all customers should get high-quality electronic
            products with ease.</p>
        <img src="../Media/Electronic.png" class="Electronic" alt="Electronic">
        <h2 class="Welcome2">Our products</h2>
        <p class="AboutText2">We offer a wide range of Printers, Storage Media, and USB Components</p>
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>
