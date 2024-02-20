<?php
session_start();
// We can use the global associative array: $_SESSION
// QUESTION:
// Is this user, that is visiting the website now, LOGGED IN or NOT
if (isset($_SESSION["UserLoggedIn"])) {
    //Leave it as it is...
}
else {
    //If there is no flag
$_SESSION["UserLoggedIn"] = false;
} // This marks if the user is logged in or not.

// WE ARE SURE that there is a flag
if(isset($_POST["UserName"])) {
$_SESSION["UserLoggedIn"] = true;
$_SESSION["UserName"] = $_POST["UserName"];
}

if(isset($_POST["Logout"])) {
    $_SESSION["UserLoggedIn"] = false;
    session_unset();
    session_destroy();
    header("Refresh:0");
        die();

}
?>

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
    if(!$_SESSION["UserLoggedIn"]) {
        ?>
        <h1>You are not recognised by our system. Please login:</h1>
        <form method="POST">
Please type your name:
<input name="UserName">
<input type="submit" value="Login">
        </form>
        <?php
    }
    else 
    {
?>
<h1>Welcome back, <?=$_SESSION["UserName"]?></h1>
<form method="POST">
    <input type="submit" name="Logout" value="Logout">
</form>
<?php
    }
    ?>
</body>
</html>