<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css">
    <title>User Registration and Login</title>
    <style>
         form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin: auto;
            margin-top: 50px;
            display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      align-items: center;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        div.message {
            margin-top: 10px;
            color: #ff0000;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
<section>
    <div class="Bgimg">
        <p class="ElectronicsShop">Electronics Shop</p>
        <a href="ContactFR.php"><img src="FrenchFlag.png" alt="" height="100px" width="100px"></a>
    </div>
<?php
    include "Commondiv.php";
    topnav(5, $language);

    ?>
<?php
$registrationMessage = '';
$loginMessage = '';

// Registration logic
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    $username = $_POST["UserName"];
    $password = $_POST["Password"];

    // Check if the username is NOT already taken
    $fileHandle = fopen("User.txt", "r");

    while (!feof($fileHandle)) {
        $userLine = fgets($fileHandle);
        $userData = explode(";", $userLine);
        if ($userData[0] == $username) {
            $registrationMessage = "Username already taken. Please choose another one.";
            break;
        }
    }
    fclose($fileHandle);

    // If the username is unique, register the user
    if (empty($registrationMessage)) {
        $fileHandle = fopen("User.txt", "a");
        $newLineForUser = $username . ";" . $password . "\n";
        fputs($fileHandle, $newLineForUser);
        fclose($fileHandle);
        $registrationMessage = "Registration successful.";
    }
}

// Login logic
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $username = $_POST["UserName"];
    $password = $_POST["Password"];

    // Check if the entered username and password match any user in the file
    $fileHandle = fopen("User.txt", "r");

    while (!feof($fileHandle)) {
        $userLine = fgets($fileHandle);
        $userData = explode(";", $userLine);
        if ($userData[0] == $username) {
            if (trim($userData[1]) == $password) {
                $loginMessage = "Congratulations, you have successfully logged in!";
            } else {
                $loginMessage = "Wrong password. Please try again.";
            }
            break;
        }
    }
    fclose($fileHandle);

    if (empty($loginMessage)) {
        $loginMessage = "Invalid username or password. Please try again.";
    }
}
?>

<!-- Registration Form -->
<form method="POST">
    <h2>User Registration</h2>
    <input type="text" name="UserName" placeholder="Username" required>
    <input type="password" name="Password" placeholder="Password" required>
    <input type="submit" value="Register" name="register">
    <div class="message">
        <?php echo $registrationMessage; ?>
    </div>
</form>

<!-- Login Form -->
<form method="POST">
    <h2>User Login</h2>
    <input type="text" name="UserName" placeholder="Username" required>
    <input type="password" name="Password" placeholder="Password" required>
    <input type="submit" value="Login" name="login">
    <div class="message">
        <?php echo $loginMessage; ?>
    </div>
</form>

</body>

</html>