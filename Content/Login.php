<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Website4.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <title>User Registration and Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif; /* Updated font */
            background-color: #f5f5f5;
            color: white;
        }

        .Bgimg {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .ElectronicsShop {
            font-family: 'Josefin Sans', sans-serif; /* Apply the updated font */

            font-size: 100px;
            margin: 0;
            color: white;
            position: relative;
            z-index: 1;
            animation: shine 2s infinite;
        }

        @keyframes shine {
            0% {
                color: white;
            }
            50% {
                color: #f8c500; /* A goldish color */
            }
            100% {
                color: white;
            }
        }

        section {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            padding: 20px;
        }

        .top-nav {
            background-color: #333;
            overflow: hidden;
        }

        .top-nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .top-nav a:hover {
            background-color: #ddd;
            color: black;
        }

        form {
            color: black;
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
        footer {
            background: linear-gradient(to bottom, #3498db, #2c3e50);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        #Spacesection {
            margin-bottom: 120px;
        }
    </style>
</head>

<body>
    <section>
        <div class="Bgimg">
            <p class="ElectronicsShop">Electronics Shop</p>
        </div>
        <?php
            include "Commondiv.php";
            topnav(5, $language);
        ?>
    </section>
    <section>

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
        <form method="POST"  id="Spacesection">
            <h2>User Login</h2>
            <input type="text" name="UserName" placeholder="Username" required>
            <input type="password" name="Password" placeholder="Password" required>
            <input type="submit" value="Login" name="login">
            <div class="message">
                <?php echo $loginMessage; ?>
            </div>
        </form>

    </section>
    <footer>
        <p>HTML Babajic Kenan 2022</p>
    </footer>
</body>

</html>
