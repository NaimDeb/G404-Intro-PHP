<?php 

$age = 10;

$gender = "Homme";
$genderText;
$ageText;

if ($gender == "Homme") {
    $genderText = "un homme";
};

if ($gender == "Femme") {
    $genderText = "une femme";
};

if ($age > 18) {
    $ageText = "Vous êtes majeur";
}
else {
    $ageText = "Vous êtes mineur";
};


echo "Vous êtes " . $genderText . " et " . $ageText;

?>