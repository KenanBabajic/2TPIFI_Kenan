<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET">
    Please type your user name
    <input name="UserName">
    <input type="submit" value="Register to our system">
</form>
    
<?php
if(isset($_GET["UserName"])) {
    $handle = fopen("Users.txt", "a");
    fputs($handle,$_GET["UserName"]);
}
?>
</body>
</html>