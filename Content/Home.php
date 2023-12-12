<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="Script.js"></script>
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
