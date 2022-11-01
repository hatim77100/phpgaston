<?php
define("SEPARATEUR", "+"); // UNE CONSTANTE AVEC LA VALEUR <+>
$separateur = "-";

$nomJoueur1 = "Hatim";
$ageJoueur1 = 21;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "Mélanie";
$ageJoueur2 = 18;
$estUnHommeJoueur2 = false;


generateurDespace(SEPARATEUR);
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
generateurDespace(SEPARATEUR);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
generateurDespace($separateur);


function afficherJoueur($nom, $age, $boolean)
{
    echo "Nom du joueur : " . $nom;
    echo "<br/>";
    echo "Age du joueur : " . $age;
    echo "<br/>";

    if ($boolean === true) {
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}


function generateurDespace($separateur)
{
    echo "<br/>";
    $i = 0;
   while ($i < 30) {
    $i++;
    echo $separateur;
   }
    echo "<br/>";
}


