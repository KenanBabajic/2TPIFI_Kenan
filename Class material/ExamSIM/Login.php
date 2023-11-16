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
    $visibleform = true;

    if (isset($_POST["UserName"]) && $_POST["Password"]) {
        $visibleform = false;
        $userisvalid = false;
        $fileHandle = fopen("User.txt", "r");
        while (!feof($fileHandle)) {
            $userLine = fgets($fileHandle);
            $userData = explode(";", $userLine);
            if ($userData[0] == $_POST["UserName"] && $userData[1] == $_POST["Password"]) {
                $userisvalid = true;
            }
        }
        fclose($fileHandle);
        if ($userisvalid) {
            $userisvalid = true;
            print("Password and username match...<br>");
            print("Welcome" . " " . $_POST["UserName"]);
        } else {
            ?>
            <script>alert("The user has not been found, please try again")</script>
            <?php
                        $visibleform = true;

        }
    }
    if ($visibleform) {
        ?>
        <form method="POST">
            <div>Please type your username:
                <input type="text" name="UserName">
            </div>
            <div>Please type your password:
                <input type="password" name="Password" id="Password">
            </div>
            <div>
                <input type="submit" name="Register">
            </div>
        </form>
    </body>
    <?php
    }
    ?>

</html>