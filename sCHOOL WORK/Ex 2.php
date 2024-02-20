<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }

        input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        input[type=number]:focus {
            border: 3px solid #555;
        }

        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
        }

        select:focus {
            border: 3px solid #555;
        }
    </style>
    <title>Simple Calculator with vanishing form</title>
</head>

<body>
    <?php
    if (isset($_GET["button"])) {
    } else {
        ?>

        <form action="" method="get">
            <input type="number" name="num1" placeholder="Enter first number">
            <input type="number" name="num2" placeholder="Enter second number">
            <select name="operator">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button class="button" type="submit" name="button">Calculate</button>
        </form>
        <?php
    }
    ?>
    <?php
    if (isset($_GET["button"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];
        switch ($operator) {
            case "add":
                echo $num1 + $num2;
                break;
            case "subtract":
                echo $num1 - $num2;
                break;
            case "multiply":
                echo $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {

                    echo $num1 / $num2;
                } else {
                    echo "You can't divide by zero";
                }
                break;
        }
    }
    ?>
</body>

</html>