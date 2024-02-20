<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIBONACCI numbers</title>
</head>
<body>
    <?php
    $a = 0;
    $b = 1;
    $c = 0;
    for ($i=0; $i < 20; $i++) { 
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo "<span style='color:green; font-weight:bold'>" . $c . "</span>" . "<br>";
    }
    ?>
    
</body>
</html>