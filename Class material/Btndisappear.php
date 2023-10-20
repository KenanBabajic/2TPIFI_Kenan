<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .Bra {
			height: 20px;
		width: 20px;
		display: inline-block;
			background-color: green;
		}
        </style>
</head>
<body>
    <?php


        if(isset($_GET["Boxes"])) {
           
            for($i=0; $i < $Numberofboxes; $i++) {
                ?>
            <div class="Bra"></div><br>
            <?php
        }
        }
else {
    ?>
    <form method="GET">
        <input type="number" name="Boxes">
        <input type="submit" value="Click me">
    </form>
    <?php
}
?>
    
</body>
</html>