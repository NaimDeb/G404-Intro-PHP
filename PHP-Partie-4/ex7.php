<?php 


function bjr($age,$gender){

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


return "Vous êtes " . $genderText . " et " . $ageText;


};

echo bjr(99, "Homme");

?>