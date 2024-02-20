<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIBONACCI even numbers in RED color</title>
</head>
<body>
    <h1>FIBUNACCI even numbers in RED color</h1>
    <?php
    $a = 0;
    $b = 1;
    $c = 0;
    $count = 0;
    for ($i=0 ;$c <= 1000000; $i++) { 
        $c = $a + $b;
        $a = $b;
        $b = $c;
        if ($c % 2 == 0) {
            echo "<span style='color:red; font-weight:bold'>" . $c . "</span>" . "<br>";
            $count++;
        }
        else {
            echo "<span style='color:Blue; font-weight:bold'>" . $c . "</span>" . "<br>";
            $count++;
        }
    }
    echo "<br>";
    echo "Total lines printed: " . $count;
    ?>
    
</body>
</html>