<?php 

$var = 1;

while ($var <= 10) {
    echo $var;
    echo "<br>";
    $var = $var + ($var/2);
}
echo $var;

?>