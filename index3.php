<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

    
    <button onclick="ChooseRNG()">Press to choose the RNG</button>

    <script>
        function ChooseRNG() {
            let Number2 = Math.floor(Math.random() * (5 - 0) + 0);
            console.log(Number2)
            if (Number2 == 0) {
                alert ("Ukrainian")
            }
            if (Number2 == 1) {
                alert ("Blonde babe")
            }
            if (Number2 == 2) {
                alert ("Paula")
            }
            if (Number2 == 3) {
                alert ("Paola")
            }
            if (Number2 == 4) {
                alert ("Tiffany")
            }
        }
    </script>
</body>
</html>