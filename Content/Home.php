<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css">
    <script src="Script.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva,
                Verdana, sans-serif;
            background-color: #f5f5f5;
            color: white;
        }

        .Bgimg {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            color: white;
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
            min-height: 300px;
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

        .Welcome {
            font-size: 24px;
            color: white;
            margin-top: 20px;
        }

        .HomeContent {
            display: flex;
            justify-content: space-evenly;
            margin: 0;
            padding-top: 50px;
        }

        .HomeContent img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
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
        topnav(1, $language);
        ?>
    </section>
    <section>
        <p class="Welcome">All of your components in one place</p>
        <div class="HomeContent">
            <img src="MSI.png" alt="Microsd 64Gb">
            <img src="../Media/Printing.png" alt="Printer">
            <img src="../Media/246546_be5mej.png" alt="NOVOO 12IN1 USB 3.0">
        </div>
        <p class="Welcome">We are passionate about delivering top-of-the-line computer components and accessories to enhance your computing experience. Explore our extensive collection of high-quality products designed to meet the demands of modern technology enthusiasts.</p>
        <p class="Welcome">We sell : Gaming computers, Gaming monitors and much more</p>


    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>
