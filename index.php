<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<table class="box">
    <thead>
        <caption>
            Multiplication table
        </caption>
    </thead>
    <tbody>
        <tr>
        <?php for($i=1;$i<=10;$i++)
         {
            echo '<tr>';
            for($j=1;$j<=10;$j++) 
            { 
                $x=$i*$j;
                echo " <td>$i * $j = $x</td>";
            }
            echo '</tr>';
         }
         ?>
        </tr>
        </tbody>
</table>
</body>
</html>