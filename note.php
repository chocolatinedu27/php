<?php
class NomDeLaClass { //Déclarer une class

    /*
    public string $firstname;
    public string $lastname;   //Propriété de la class, de quoi elle est construite
    public int $age;           // Si public = acces partout ; private = acces dans la class
    */

    public function __construct(
        private string $firstname, 
        public string $lastname,  
        public int $age) 
        // déclarer les variables directement dans le construct plutot que plus haut et de les relier
        {
        /*
        $this->firstname = $firstname;
        $this->lastname = $lastname; //relié au variable de la class
        $this->age = $age;
        */

        }

    public function displayUser(){
        echo $this->getFullName . " " . $this->age; 
        //$this->NomDeVariable, récuperer la variable dans la class
    }

    private function getFullName(){
        return $this->firstname . " " . $this->lastname; 
        //$this->NomDeVariable, récuperer la variable dans la class
    }

    public function getFirstName(): string {
        return $this->firstname;
    }

    public function setFirstName(string $firstname): void {
        $this->firstname = $firstname;
    }

}


$NomDeVariable = new NomDeLaClass("John", "Doe", 44); //utiliser l'objet
$NomDeVariable2 = new NomDeLaClass("Partrick", "Doe", 70); //utiliser l'objet



/*
$NomDeVariable->firstname = 'John';
$NomDeVariable->lastname = 'Doe';    //Ajouter des valeurs dans les props
$NomDeVariable->age = '44';
*/



$NomDeVariable->displayUser(); //utiliser une fonction includ dans une class
echo "<br/>";
$NomDeVariable2->displayUser(); //utiliser une fonction includ dans une class



?>