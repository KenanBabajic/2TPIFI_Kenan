<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css?val=<?=time(); ?>">
    <script src="Script.js"></script>
    <title></title>
</head>
<body>
    <section>
    <div class="Bgimg">
        <p class="ElectronicsShop">Electronics Shop</p>
        <a href="HomeFR.php"><img src="FrenchFlag.png" alt="" height="100px" width="100px"></a>
    </div>
    <?php
    include "Commondiv.php"; topnav(1);
    ?>

    <h1>Yo</h1>

    <div class="AllProducts">
      <?php
//Open a text file
$handle = fopen("Book1.csv", "r");
//Read from the file - line by line
while(!feof($handle)) {
    $line = fgets($handle); //This will read one line of the text
    print($line. "<br>");
}
//Close the file
fclose($handle);
      ?>
    </div>
</body>