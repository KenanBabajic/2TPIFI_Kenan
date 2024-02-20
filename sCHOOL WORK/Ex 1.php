<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanishing Button</title>
</head>
<body>
   <?php
    if (isset($_GET["button"])) {
    }
    else {
        ?>        
         
    
    <form>
        <button type="submit" name="button">Click here to vanish </button>
    </form>
    <?php
    }
    ?>
</body>
</html>