<?php 
declare(strict_types=1);

function helloWorld():string {
    return "HelloWorld ! <br/>";
}

echo helloWorld();

function retourneArgument(string $text):string {
    return $text;
}

echo retourneArgument("j'aime les chats <br/>");

function concatenation(string $str1, string $str2):string{
    return $str1 . $str2;
}
echo concatenation("John", "Doe <br/>");


function concatenationAvecEspace(string $str1, string $str2):string{
    return "$str1 $str2";
}

echo concatenationAvecEspace("John", "Doe <br/>");

function estMajeur(int $age):bool{
    if($age >= 18){
        return true;
    } else {
        return false;
    }
}

var_dump(estMajeur(12));

echo "<br/>";

function plusGrand(int $int1, int $int2){
    if($int1 > $int2){
        return "$int1 est supérieur à $int2";
    } else if ($int1 < $int2){
        return "$int1 est inférieur à $int2";
    } else {
        return "$int1 et $int2 sont égaux";
    }
}

echo plusGrand(10, 23);

echo "<br/>";

$tab1 = [];
$tab2 = [1, 2];

function premierElementTableau(?array $array){
    if($array){
        return $array[0];
    } else {
        return null;
    }
}

echo premierElementTableau($tab1);
echo premierElementTableau($tab2);

echo "<br/>";

function plusGrandArray(array $array){
    return max($array);
}

echo plusGrandArray($tab2);

echo "<br/>";

function verificationPassword(string $password){
    if(strlen($password) >= 8){
        return "true";
    } else {
        return "false";
    }
}

echo verificationPassword("chocolatchaud");

$users = [
    [
        'name' => 'Jean',
        'email' => null,
        'age' => 45,
        'isActive' => false,
    ],
    [
        'name' => 'Alex',
        'email' => 'alex@gmail.com',
        'age' => 28,
        'isActive' => true,
    ],
    [
        'name' => 'Paul',
        'email' => 'paul@gmail.com',
        'age' => 29,
        'isActive' => false,
    ],
    [
        'name' => 'Léna',
        'email' => 'lena@gmail.com',
        'age' => 1,
        'isActive' => true,
    ],
    [
        'name' => 'Christine',
        'email' => 'christine@gmail.com',
        'age' => 47,
        'isActive' => true,
    ],
];

function filter(array $array): array {
    $autorized = [];

    foreach ($array as $user){
        if($user['isActive'] === true 
        && $user['age'] > 18 
        && $user['email']!== null)
        {
            $autorized[] = $user;
        }
    }

    return $autorized;
}

var_dump (filter($users));
?>