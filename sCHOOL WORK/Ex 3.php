<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODD numbers between 200 and 250</title>
</head>
<body>
    <?php
    for ($i=200; $i <= 250; $i++) { 
        if ($i % 2 == 1) {
            echo $i . "<br>";
        }
    }
    ?>
    
</body>
</html>