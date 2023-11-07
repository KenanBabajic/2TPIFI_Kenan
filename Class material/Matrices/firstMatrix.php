<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: green;
            padding: 5px;
        }
        .red {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: red;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    //We are given a matrix :
    /*
    $matrix = [ [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12]
    ]
    */

    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ];

    for($i=0;$i<count($matrix); $i++) {
    
        for($j=$i;$j< count($matrix[$i]);$j++) {
            print($matrix[$j][$i] . " ");
            }
    print "<br>";
}

$n = 10;

for($i=0;$i<$n; $i++) {
    
    for($j=0;$j< $i;$j++) {
        if (($i + $j) % 2 == 0) {
        print("<div class='red'></div>");
        }
        else {
            print ("<div class='green'></div>");
        }
        print(" ");

}
print "<br>";

}


    ?>
</body>

</html>