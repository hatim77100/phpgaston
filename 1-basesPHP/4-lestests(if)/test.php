<?php

$estUnHommeJoueur1 = true;
$nomJoueur1 = "Hatim";
$ageJoueur1 = 40;

$estUnHommeJoueur2 = false;
$nomJoueur2 = "Mélanie";
$ageJoueur2 = 37;

$text = test(40);
echo $text;
echo "<br/>";
generateurDespace();
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
generateurDespace();
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
generateurDespace();
afficherJoueurLePlusAgee($ageJoueur1, $ageJoueur2);
generateurDespace();

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

function test($c)
{
    $a = 5;
    $b = 10;
    return $a + $b + $c;
}

function afficherJoueurLePlusAgee($ageDuJoueur1, $ageDuJoueur2)
{
    if ($ageDuJoueur1 > $ageDuJoueur2) {
        echo "Joueur 1 est le plus agé";
    } else {
        echo "joueur 2 le plus agé";
    }
}
function generateurDespace()
{
    echo "<br/>";
    echo "------------------------------";
    echo "<br/>";
}
