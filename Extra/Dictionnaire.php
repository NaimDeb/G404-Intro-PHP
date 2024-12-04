<?php 

$string = file_get_contents("./assets/dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);


echo "<p> Ce dictionnaire contient : " . count($dico) . " mots </p>";

$compteQuinze = 0;

foreach ($dico as $value) {
    // strlen($value) == 15 ? $compteQuinze++ : null ;
    if(strlen($value) === 15) {
        $compteQuinze += 1;
    }

};

echo "<p> Nombre de mots a 15 lettres : " . $compteQuinze . "</p>";

$compteMotW = 0;

foreach($dico as $value){
    str_contains(strtoupper($value), "W") ? $compteMotW++ : null ;
};

echo "<p> Nombre de mots avec un W : " . $compteMotW . "</p>";

$compteMotFinitQ = 0;

foreach($dico as $value){
    str_ends_with(strtoupper($value), "Q") ? $compteMotFinitQ++ : null ;
};

echo "<p> Nombre de mots finissant par un Q : " . $compteMotFinitQ . "</p>";






?>