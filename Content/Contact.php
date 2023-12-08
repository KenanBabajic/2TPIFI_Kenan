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
            text-align: center;
        }

        .address {
            text-align: center;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
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
        topnav(3, $language);
        ?>
    </section>
    <section>
        <p class="Welcome2">Contact us:</p>
        <address class="address">
            <p class="address">Our address: 50 Rue de Beggen, 1220 Luxembourg</p>
            <p>Our email: <a href="mailto:electronicsshopKenanBabajic@gmail.com">electronicsshopKenanBabajic@gmail.com</a>.</p>
            <p>Our phone number: <a href="tel:691 242 042 222">691 242 042 222</a></p>
        </address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10336.120780609705!2d6.1349077!3d49.6348855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf0b2f1f4e71633b!2sLyc%C3%A9e%20Priv%C3%A9%20Emile%20Metz!5e0!3m2!1sde!2slu!4v1651656582603!5m2!1sde!2slu"
            allowfullscreen; loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" frameborder="0"></iframe>
    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>
