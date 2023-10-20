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

$arrayofcolors = array("red","green","blue","purple","pink","black","white","brown");

if(isset($_GET["color"])) {
    if (is_numeric($_GET["color"])) {
        print("You selected: " . $arrayofcolors[$_GET["color"]]);
    }

}


?>

<form method="GET">
    <select name="color">
      <?php
      for($i=0;$i<count($arrayofcolors); $i++) {
      ?>
      <option <?php
      if(isset($_GET["color"])) {
        if ($_GET["color"] == $i) {
            print("selected");
        }
      }
      ?> value="<?= $i ?>"><?= $arrayofcolors[$i] ?></option>
      <?php
      }
      ?>
    </select>
    <input type="submit" value="Go">
</form>
    
</body>
</html>