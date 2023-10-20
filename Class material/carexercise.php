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

$arrayofcars = array("first","second","third","fourth","fifth");

if(isset($_GET["cars"])) {
    if (is_numeric($_GET["cars"])) {
        if ($_GET["cars"] == 0) {
        for ($a=0; $a<1; $a++) {
            print("<img src=car1.jpg>");
        }
    }
    if ($_GET["cars"] == 1) {
        for ($a=0; $a<2; $a++) {
            print("<img src=car1.jpg>");
        }
    }
    if ($_GET["cars"] == 2) {
        for ($a=0; $a<3; $a++) {
            print("<img src=car1.jpg>");
        }
    }
    if ($_GET["cars"] == 3) {
        for ($a=0; $a<4; $a++) {
            print("<img src=car1.jpg>");
        }

    }
    if ($_GET["cars"] == 4) {
        for ($a=0; $a<5; $a++) {
            print("<img src=car1.jpg>");
        }

    }
}
}


?>

<form method="GET">
    <select name="cars">
      <?php
      for($i=0;$i<count($arrayofcars); $i++) {
      ?>
      <option <?php
      if(isset($_GET["cars"])) {
        if ($_GET["cars"] == $i) {
            print("selected");
        }
      }
      ?> value="<?= $i ?>"><?= $arrayofcars[$i] ?></option>
      <?php
      }
      ?>
    </select>
    <input type="submit" value="Go">
</form>

</body>
</html>