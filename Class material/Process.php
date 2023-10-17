<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome 
    <?php
print($_GET["UsersName"]);
print("<br>");
$Equation = ($_GET["Equation"]);
$Equation2 = ($_GET["Equation2"]);
// $Equation = (int)($_GET["Equation"]); - if we use input type text
// $Equation = (int)($_GET["Equation2"]); - if we use input type text

print("The result is " . $Equation + $Equation2);

?>

</h1>
</body>
</html>