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
    // var_dump($_GET);

    if(isset($_POST["UserName"],$_POST["Password"],$_POST["PasswordAgain"]) && $_POST["Password"] == $_POST["PasswordAgain"])  {
        print("You will be registered to our system");
    }
    else {
        
    ?>
    
<form method="POST">
    <div>Please choose a username:
        <input type="text" name="UserName">
    </div>
    <div>Please type a password:
        <input type="password" name="Password" id="Password">
    </div>
    <div>Please type the same password:
        <input type="password" name="PasswordAgain" id="PasswordAgain">
    </div>
    <div>Please choose your country of residence:
        <select name="Country">
            <option>Luxembourg</option>
            <option>France</option>
            <option>Germany</option>
            <option>UK</option>
            <option>Bosnia and Herzegovina</option>
        </select>
    </div>
    <div>
        <input type="submit" name="Register">
    </div>
</form>
<?php
}
?>
</body>
</html>