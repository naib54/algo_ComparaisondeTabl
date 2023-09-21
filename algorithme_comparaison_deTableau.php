<?php

$tab1 = [1,2,3,4,5,6,7,8,9,10]; // Je déclare deux tableaux qui contient des entiers
$tab2 = [1,2,3,4,5,6,7,8,9,10]; //

$verif = true; // J'initialise une variable de booléen Vrai pour la vérification

if (count($tab1) == count($tab2)){ // Je vérifie que les tableaux ont la même longueur, dans le cas contraire je n'ai pas besoin de vérifier leur contenu
    for ($i = 0; $i < count($tab1) ; $i++){ // Pour l'itérateur allant de 0 à la longueur de mon tableau 1
        if($tab1[$i] == $tab2[$i]){     // je test pour chaque index du tableau si les contenus des deux sont égaux ou pas, avec mon itérateur i
            echo("à la position " . $i . " les contenus sont égaux \r\n");
        } else {
            $verif = false;
            echo("à la position " . $i . "les contenus sont différents \r\n");
        }
    }
    if ($verif == true){
      echo("Ce sont les mêmes tableaux !");
    } else {
      echo("Ce ne sont pas les mêmes tableaux !");
    }
}else{
    echo("Ce n'est pas les mêmes tableaux !");
}
 ?>