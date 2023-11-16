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
    $visibleform = true;

    if (isset($_POST["UserName"], $_POST["Password"], $_POST["PasswordAgain"])) {
        $visibleform = false;
        if ($_POST["Password"] == $_POST["PasswordAgain"]) {
            $userisvalid = true;
            if ($_POST["Password"] == "") {
                $userisvalid = false;
            }

            if ($userisvalid) {
                $fileHandle = fopen("User.txt", "r");
                $userisvalid = true;
                while (!feof($fileHandle) && $userisvalid) {
                    $userLine = fgets($fileHandle);
                    $userData = explode(";", $userLine);
                    if ($userData[0] == $_POST["UserName"]) {
                        $userisvalid = false;
                    }
                }
                fclose($fileHandle);
            }
            //before writing the new user, we need to make sure that this user is not already taken/used
            //we need to read the file and check if the user is already there
            if ($userisvalid) {
                print("Passwords match...<br>");

                print("You will be registered to our system");
                $fileHandle = fopen("User.txt", "a");
                $newLineForUser = $_POST["UserName"] . ";" . $_POST["Password"] . ";" . $_POST["Country"] . "\n";
                fputs($fileHandle, $newLineForUser);
                fclose($fileHandle);
            } else {
                print("Invalid user data");
            }
        } else {
            $visibleform = true;
            ?>
            <script>alert("Your passwords are not matching")</script>
            <?php
        }
    }


    
    if ($visibleform) {
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