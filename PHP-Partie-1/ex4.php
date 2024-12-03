<?php

$string = "hello world";
$int = 482748732;
$float = 3.14;
$bool = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>
        <?php
        echo $string;
        echo "<br>";
        echo $int;
        echo "<br>";
        echo $float;
        echo "<br>";

        echo $bool;
        ?>
    </h3>
    
</body>
</html>