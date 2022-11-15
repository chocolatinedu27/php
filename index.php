<?php
require "classes/User.php";
require "classes/Customer.php";
require "classes/Administrator.php";

//$user1 = new NomDeLaClass("TOTO", "Doe", 44);

$customer =  new Customer("John", 
    "Doe", 
    "johndoe@test.com",
    47.5, 
    ['Premier livre', 'le PHP pour les nuls'],);


$admin = new Administrator(
    "Jeff",
    "Bezos",
    "jeff@amazon.fr",
);

$admin->displayUser();

?>