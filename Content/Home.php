<?php include "Commondiv.php"; ?>

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
    transform: scale(1.2); /* Slightly smaller size when selected */

}
    </style>
    <title></title>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop"><?=($ArrayOfStrings["CommonShopName"]);?></p>
        </div>
        <?php
        topnav(1, $language);
?>
    </section>
    <section>
    
        <div class="scroll-container">
        <p class="Welcome"><?=($ArrayOfStrings["HomeHeader"]);?></p>
      
    <img src="600.png">
    <img src="24inch.png">
    <img src="OdysseyG62.png">
</div>
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>
