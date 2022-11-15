<?php 

/*1 : 1 2 3 4 7*/

$notePhp = 16;
$noteJs = 12;
$notePython = 8;
$moyenne = ($notePhp + $noteJs + $notePython) /3;

echo "La moyenne est de" . $moyenne . "/20. <br/>";


$prixHT = 40;
$tva = 20;
$prixTTC = ($prixHT/$tva) + $prixHT;

echo "Le prix TTC du produit est de " . $prixTTC . "€. <br/>";


$genre = "homme";

if($genre === "homme"){
    echo "Vous êtes un homme";
} else if ($genre === "femme"){
    echo "Vous êtes une femme";
} else {
    echo "on est la";
};

echo "<br/>";

$budget = 1345.58;
$achat = 1266.00;

if($achat <= $budget){
    echo "Vous pouvez acheter l'objet <br/>";
} else {
    echo "go éco un peu plus <br/>";
};

$age = 19;

if($age >= 18){
    echo "Majeur <br/>";
} else {
    echo "Mineure <br/>";
}

$heure = 3;

if($heure>1 && $heure <= 12){
     echo "Matin <br/>";
} else if ($heure >= 12 && $heure <= 22){
    echo "Après-midi <br/>";
} else {
    echo "Nuit <br/>";
}

$departement = 76000;

while($departement <= 76002){
    echo $departement . "<br/>";
    $departement++;
}

for($i = 0; $i <= 10; $i++){
    echo 5 * $i . "<br/><br/>";
}


for($number = 1; $number<=5; $number++){
        for($i = 1; $i <= $number; $i++){
            echo $number;
        }
}

echo "<br/>";

$number = 0;
while($number <= 20){

    if($number == 10){
        echo "<b>$number</b><br/>";
    } else {
        echo $number . "<br/>";
    }

    $number += 2;
}


$ville = [
    "France : Paris",
    "Allemagne : Berlin",
    "Itali : Rome",
];

foreach($ville as $villes){
    echo $villes . "<br/>";
}


$tab = [];
$i = 0;
$isAllow = false;
while($i <= 10){
    $tab[$i] = rand(0, 100);
    $i++;
}


foreach($tab as $tabs){
    if($tabs == 42){
        $isAllow = true;
    }
}

if($isAllow){
    echo "Le tableau contient le chiffre 42 <br/>";
} else {
    echo "Le tableau ne contient pas le chiffre 42 <br/>";
}
echo var_dump($tab);

echo "<br/>";
echo "<br/>";

$tabnofilter = [];
$tabPlus50 = [];
$tabMoin50 = [];
$i = 1;

while($i <= 10){
    $tabnofilter[$i] = rand(0, 100);
    $i++;
}

foreach($tabnofilter as $filter){
    if($filter >= 50){
        array_push($tabPlus50, $filter);
    } else {
        array_push($tabMoin50, $filter);
    }
}

foreach($tabPlus50 as $plus50){
    echo $plus50 . " ";
}

echo "<br/>";

foreach($tabMoin50 as $moins50){
    echo $moins50 . " ";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$paysPlus20M = [];
$paysPopulation = [
	'France' => 67595000,
	'Suede' => 9998000,
	'Suisse' => 8417000,
	'Kosovo' => 1820631,
	'Malte' => 434403,
	'Mexique' => 122273500,
	'Allemagne' => 82800000,
];

foreach($paysPopulation as $key => $paysPopulations){
    if($paysPopulations > 20000000){
        array_push($paysPlus20M, $key);
    }
}

echo "Les pays avec +20M de population sont : ";
foreach($paysPlus20M as $paysPlus20Ms){
    echo $paysPlus20Ms . " ";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo "Il y a " . array_sum($paysPopulation) . " habitants répartis dans " . count($paysPopulation) . " pays";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$langages = ["Python", "Java", "PHP", "C#", "JavaScript"];
echo $langages[1];

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$personnes = [
	"Adrien" => 26,
	"Manon" => 25,
	"Pierre" => 39
];

echo $personnes["Manon"];


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$developpeurs = [
	"Adrien" => ["PHP", "C#", "JavaScript"],
	"Manon" => ["Python", "PHP", "JavaScript"],
	"Pierre" => ["Python", "Java"]
];

foreach($developpeurs["Pierre"] as $dev){
    echo $dev . " ";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$users = [
    [
        'name' => 'John Doe',
        'email' => 'john.doe@exemple.com',
        'age' => 54,
		'password' => 'aPMQOKSqsd'
    ],
    [
        'name' => 'Mac Queen',
        'email' => 'mac.queen@exemple.com',
        'age' => 28,
		'password' => 'df54qsd64e8f7htytrumxiaMSDK'
    ],
];

if($users[0]["password"] > $users[1]["password"]){
    echo $users[0]['name'] . " " . $users[0]['email'] . " à le plus grand mdp";
} else {
    echo $users[1]['name'] . " " . $users[1]['email'] . " à le plus grand mdp";
}
?>