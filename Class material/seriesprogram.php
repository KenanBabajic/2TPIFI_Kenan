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
$Numsave = 0;
$x = 0;
$y = 1;
print "0"."<br>";
for(;$Numsave<10000;) {
    
    $Numsave = $x + $y;
    $x = $y;
    $y = $Numsave;
    print($x."<br>");
    
    

}
    ?>
</body>
</html>