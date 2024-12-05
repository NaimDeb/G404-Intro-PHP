<?php 

function exo3($num1, $num2){

    if($num1 > $num2) {
        return "Le premier nombre est plus grand";
    }
    else if($num2 > $num1) {
        return "Le premier nombre ets plus petit";
    }
    else {
        return "Les deux nombres sont identiques";
    };
};

echo exo3(5, 15);
echo exo3(15, 15);
echo exo3(35, 15);

?>