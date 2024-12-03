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

$compte

// foreach($dico as $value){

// }



?>