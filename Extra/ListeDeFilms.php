<?php

$string = file_get_contents("./assets/films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

// echo $top[1]["im:name"]["label"];


for ($i=0; $i < 10; $i++) { 
    $num = $i+ 1;
    echo "{$num} {$top[$i]["im:name"]["label"]} <br>";
};

echo "<br>";
echo "<br>";

foreach ($top as $key => $value) {
 if( $value["im:name"]["label"] == "Gravity") {
    echo "Gravity est a la place " . ($key +1);
    break;
};
};

echo "<br>";
echo "<br>";


foreach ($top as $key => $value) {
 if( $value["im:name"]["label"] == "The LEGO Movie") {
    echo "The LEGO Movie a été réalisé par " . $value["im:artist"]["label"];
    break;
 };
};


echo "<br>";
echo "<br>";

$jsp = new DateTime($top[14]["im:releaseDate"]["label"]);


echo "<br>";

$compteAvant2000 = 0;
$Date2000 = new DateTime("2000-01-01");

foreach ($top as $key => $value) {
    $date = $value["im:releaseDate"]["label"];

    if( $date < 2000) {
       $compteAvant2000++;
    };
   };

echo "Il y'a {$compteAvant2000} films sortis avant 2000";


echo "<br>";
echo "<br>";
$filmPlusVieux = "";
$filmPlusRecent = "";
$datePlusVieux = 2010;
$datePlusRecent = 2010;

foreach ($top as $key => $value) {
    $date = $value["im:releaseDate"]["label"];

    if ($date < $datePlusVieux) {
        $datePlusVieux = $date;
        $filmPlusVieux = $value;
    };

    if ($date > $datePlusRecent) {
        $datePlusRecent = $date;
        $filmPlusRecent = $value;

    };
    
};



echo "Le film le plus récent est {$filmPlusRecent["im:name"]["label"]} sorti en {$filmPlusRecent["im:releaseDate"]["attributes"]["label"]}"; 
echo "<br>";
echo "Le film le plus vieux est {$filmPlusVieux["im:name"]["label"]} sorti en {$filmPlusVieux["im:releaseDate"]["attributes"]["label"]}"; 



echo "<br>";
echo "<br>";


$genres = [];
foreach ($top as $item) {
    $genres[] = $item["category"]["attributes"]["term"];
}

$genres = array_count_values($genres);

arsort($genres);

$genres = array_slice($genres, 0, 1);

echo "Il y'a " . current($genres) . " films d'" . key($genres);



echo "<br>";
echo "<br>";


$realisateurs = [];
foreach ($top as $item) {
    $realisateurs[] = $item["im:artist"]["label"];
}

$realisateurs = array_count_values($realisateurs);

arsort($realisateurs);

$realisateurs = (array_slice($realisateurs, 0, 1));

echo "Il y'a " . current($realisateurs) . " films de " . key($realisateurs);

echo "<br>";
echo "<br>";


$prix = 0;

for ($i=0; $i < 10; $i++) { 
    $prix += $top[$i]["im:price"]["attributes"]["amount"];
};

echo "Cela couterait " . $prix . "dollars d'acheter le top 10";

echo "<br>";
echo "<br>";


$dates = [];
foreach ($top as $item) {
    $dateFull = new DateTime($item["im:releaseDate"]["label"]);
    $dateMois = $dateFull->format('m');
    $dates[] = $dateMois;
    
}

$dates = array_count_values($dates);

arsort($dates);

print_r(array_slice($dates, 0, 1));
echo "Le mois d'août a eu 13 films";


echo "<h4>Quels sont les 10 meilleurs films à voir en ayant un budget limité ?</h4>";


$budgetLimite =26;
$filmsAVoir = [];

echo "Avec un budget de {$budgetLimite}€, vous pouvez voir ces films : <br>";

foreach ($top as $key => $value) {
    if ($budgetLimite >= $value["im:price"]["attributes"]["amount"]) {
        $filmsAVoir[] = $value["im:name"]["label"];
        $budgetLimite -= $value["im:price"]["attributes"]["amount"];
    } else {break;};
};


foreach ($filmsAVoir as $value) {
    echo $value . "<br>";
};

echo "<br> Et il vous restera " . $budgetLimite . "€";