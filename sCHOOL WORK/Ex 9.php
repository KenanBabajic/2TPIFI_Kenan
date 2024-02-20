<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

        input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type=submit]:hover {
  opacity: 0.8;
}
    </style>
    <title>Array with index value calculator</title>
</head>
<body>    
    <form action="" method="post">
        <select name="number" id="">
            <option value="1">1</option>
            <option value="2">2</option> 
            <option value="3">3</option> 
            <option value="4">4</option> 
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        $arr = array(10,14,22,222,11);
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            $count = 0;
            for($i=0; $i<$number; $i++){
                $count += $arr[$i];
            }
            echo $count;
        }
    ?>
        
</body>
</html>