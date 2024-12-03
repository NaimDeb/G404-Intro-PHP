<?php 

list ($operationUn, $operationDeux, $operationTrois) = array((3+4), (5*20), (45/5));

function echoWithbr($variable) {

    echo $variable;
    echo "<br>";

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?php echoWithbr($operationUn) ?></h1>
    <h1><?php echoWithbr($operationDeux) ?></h1>
    <h1><?php echoWithbr($operationTrois) ?></h1>
    
</body>
</html>