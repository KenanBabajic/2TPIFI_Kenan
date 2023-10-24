<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .redBox {
            background-color: red;
            width: 100px;
            height: 100px;
        }

        .blueBox {
            background-color: blue;
            width: 100px;
            height: 100px;
        }

        .greenBox {
            background-color: green;
            width: 100px;
            height: 100px;
        }

        .yellowBox {
            background-color: yellow;
            width: 100px;
            height: 100px;
        }

        .orangeBox {
            background-color: orange;
            width: 100px;
            height: 100px;
        }

        .purpleBox {
            background-color: purple;
            width: 100px;
            height: 100px;
        }

        .pinkBox {
            background-color: pink;
            width: 100px;
            height: 100px;
        }

        .brownBox {
            background-color: brown;
            width: 100px;
            height: 100px;
        }

        .blackBox {
            background-color: black;
            width: 100px;
            height: 100px;
        }

        .whiteBox {
            background-color: white;
            width: 100px;
            height: 100px;
        }
    </style>
    <title>Document</title>
</head>

<body>
<?php
if(isset($_GET["cars"])) {
    if (is_numeric($_GET["cars"])) {
        if ($_GET["cars"] == 0) {
        for ($a=0; $a<1; $a++) {
            ?>
            <div class="redBox"></div>
            <?php
        }
        if ($_GET["cars"] == 1) {
            for ($a=0; $a<1; $a++) {
                ?>
<div class="blueBox"></div>
                <?php
            }

    }
}
}

}

$arrayofcolors = array("red","blue","green","yellow","orange","purple","pink","brown","black","white");

?>
    <form method="GET">
    <select name="cars">
      <?php
      for($i=0;$i<count($arrayofcolors); $i++) {
      ?>
      <option <?php
      if(isset($_GET["cars"])) {
        if ($_GET["cars"] == $i) {
            print("selected");
        }
      }
      ?> value="<?= $i ?>"><?= $arrayofcolors[$i] ?></option>
      <?php
      }
      ?>
            <option value='white'>white</option> <input type="submit" value="Change color">
        </select>
    </form>
    <div class="redBox">

    </div>

</body>

</html>