<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers between 200 and 300 devisible by 5</title>
</head>
<body>
    <?php
    for ($i=200; $i <= 300; $i++) { 
        if ($i % 5 == 0) {
            echo "<span style='color:red'>" . $i . "</span>" . "<br>";
        }
        else {
            echo $i . "<br>";
        }
    }
    ?>
    
</body>
</html>