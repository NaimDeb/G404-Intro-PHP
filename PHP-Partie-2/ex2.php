<?php 

$isEasy = true;

if ($isEasy) {
    echo "C'est facile";
}else {
    echo "C'est difficile";
};

$isEasy = !$isEasy;

echo "<br>";

echo $isEasy ?  "Facile" : "Pas facile";


?>