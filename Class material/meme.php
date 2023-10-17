<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    
        function Bruh() {
            if (document.getElementById("radio1").checked = true && document.getElementById("radio2").checked == false && document.getElementById("radio3").checked == false) {
                alert("Nigga")
                document.getElementById("Bra").innerHTML = "<img src=\img2.jpg>"

            }
           if (document.getElementById("radio2").checked = true && document.getElementById("radio1").checked == false  && document.getElementById("radio3").checked == false) {
                alert("Whigga")
                document.getElementById("Bra").innerHTML = "<img src=\img1.jpg>"
            }
            if (document.getElementById("radio3").checked = true && document.getElementById("radio2").checked == false  && document.getElementById("radio1").checked == false) {
                alert("Lightskin nigga")
                document.getElementById("Bra").innerHTML = "<img src=\img3.jpg>"

                
            }
        }

    </script>
</head>
<body>
    <p>Are you black?</p>
    <input type="radio" id="radio1" name="check button">
    <label for="radio1">Yes</label>
    <input type="radio" id="radio2" name="check button">
    <label for="radio2">No</label>
    <input type="radio" id="radio3" name="check button">
    <label for="radio3">50/50</label>
    <button onclick="Bruh()">Get your result</button>
    <p id="Bra"></p>
</body>
</html>