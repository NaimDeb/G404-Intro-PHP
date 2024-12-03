// algo.php
<?php

// Variables
$string = "une chaine de caractère";
$nombre = 5;
$tableau = ["1", 2, "test"];
$boolean = true;

// equivalent console.log en php
var_dump($string);
// die();
var_dump($nombre);
var_dump($tableau);
var_dump($boolean);

// Conditions
if ($boolean) {
    echo "<p>c'est vrai</p>";
} else {
    echo "c'est faux<br>";
}

// ternaire 

echo $boolean ? "c'est vrai<br>" : "c'est faux<br>";


// boucle
for($i = 0; $i < $nombre; $i += 1){
    echo $i;
}

foreach ($tableau as $value) {
    echo "<br>" . $value . "<br>";
}


// function

function multiply (int $nombre1, int $nombre2){
    return $nombre1 * $nombre2;
}

echo "<h2>" . multiply(5, 17) . "</h2>";