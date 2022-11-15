<?php

declare(strict_types=1);

function hello(): string {
    return "Bonjour<br/>";
}

echo hello();

function helloName(?string $name) {
    return $name ? "Bonjour $name" : "Bonjour inconnue <br/>";
}

echo helloName("chcoo");
echo helloName(null);


function presentation(string $name, ?int $age = 30) {
    if($age){ //si age n'est pas égale a null / vide
        return "Bonjour $name, vous avez $age ans <br/>";
    }else {
        return "Bonjour $name";
    }

    
}

echo presentation("Nathan", 18);



?>