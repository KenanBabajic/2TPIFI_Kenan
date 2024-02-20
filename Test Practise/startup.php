<!DOCTYPE html>
<html lang="en" xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            .box {
                display: inline-block;
                width: 20px;
                height: 20px;
            }

            .blueBox {
                background-color: blue;
            }

            .greenBox {
                background-color: green;
            }

            .redBox {
                background-color: red;
            }
        </style>
    
<!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers msdt:dt="string">2TPIFI - LPEM 23/24 Members</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers>
<mso:SharedWithUsers msdt:dt="string">23;#2TPIFI - LPEM 23/24 Members</mso:SharedWithUsers>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>

    <body>
        <?php

$filename = "input.txt"; // Replace with the actual file name

$file = fopen($filename, "r");

if ($file) {
    // Start of body
    echo "<body>\n";

    while (($line = fgets($file)) !== false) {
        // Start of div tag
        echo "\t<div>";

        // Remove extra spaces and split by comma
        $parts = explode(",", trim($line));

        // Check the size of the array
        if (count($parts) === 5) {
            // Compute the sum B+C+D
            $sum = $parts[2] + $parts[3] + $parts[4];

            // Check if sum is greater than A
            if ($sum > $parts[0]) {
                echo "MAX LIMIT reached";
            } else {
                // Loop B+C+D times
                for ($i = 0; $i < $sum; $i++) {
                    // Print span tag
                    echo "<span class=\"box {$parts[1]}\"> </span>";
                }
            }
        } else {
            // Cannot parse this row
            echo "Cannot parse this row";
        }

        // End of div tag
        echo "</div>\n";
    }

    // End of body
    echo "</body>\n";
    fclose($file);
} else {
    echo "Error opening file!";
}
/*Without this
?>
        <div>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
            <span class="box greenBox"> </span>
        </div>
        <div>MAX LIMIT reached</div>
        <div>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
            <span class="box redBox"> </span>
        </div>
        <div>Cannot parse this row</div>
        <div>Cannot parse this row</div>
        <div>
            <span class="box blueBox"> </span>
            <span class="box blueBox"> </span>
            <span class="box blueBox"> </span>
        </div>


        */
        ?>
    </body>
</html>
