<!DOCTYPE html>
<html lang="en">

<head>
    <title>Multiplication Table Result</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>

    <div class="box">
        <?php

        $number = $_POST['number']; 
        
        if ($number) { 
            print "<table>";

            for ($i = 1; $i <= 10; $i++) {
                print "<tr>";
                print "<td>" . $number . "</td>";
                print "<td>x</td>";
                print "<td>" . $i . "</td>";
                print "<td>=</td>";
                print "<td>" . $number * $i . "</td>";
                print "</tr>";
            }

            print "</table>";
        }

        ?>
    </div>

</body>
</html>