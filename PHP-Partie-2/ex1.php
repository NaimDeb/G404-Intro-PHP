<?php 

$age = 19;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <?php if ($age > 18) {
            echo "Vous êtes majeur";
        }
        else {
            echo "Vous êtes mineur";
        };
        ?>

    </h1>
    
</body>
</html>