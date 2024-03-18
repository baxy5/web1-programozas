<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Szorzótábla</h1>
    
    <table>
        <tbody>
            <?php
                for ($i = 1; $i < 11; $i++){
                    echo '<tr>'; 
                        for($j = 1; $j < 11; $j++){
                            echo "<td> $j * $i = " . ($j * $i) . "</td>";
                        }
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>