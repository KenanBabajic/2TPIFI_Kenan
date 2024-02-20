<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIBONACCI numbers up to 1M</title>
</head>
<body>
    <h1>FIBUNACCI smaller or equal to 1M</h1>
    <?php
    $a = 0;
    $b = 1;
    $c = 0;
    $count = 0;
    for ($i=0 ;$c <= 1000000; $i++) { 
        $c = $a + $b;
        $a = $b;
        $b = $c;
        
            echo "<span style='color:Blue; font-weight:bold'>" . $a . "</span>" . "<br>";
            $count++;
        }
        
            
    echo "<br>";
    echo "Total lines printed: " . $count;
    ?>    
</body>
</html>