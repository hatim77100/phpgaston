<?php
define("SEPARATEUR", "+"); // UNE CONSTANTE AVEC LA VALEUR <+>
$separateur = "-";

$nomJoueur1 = "Hatim";
$ageJoueur1 = 21;
$estUnHommeJoueur1 = true;

$nomJoueur2 = "Mélanie";
$ageJoueur2 = 18;
$estUnHommeJoueur2 = false;


$text = test(40);
echo $text;
echo "<br/>";
generateurDespace(SEPARATEUR);
afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
generateurDespace(SEPARATEUR);
afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
generateurDespace($separateur);
afficherJoueurLePlusAgee($ageJoueur1, $ageJoueur2);
generateurDespace($separateur);
$differenceAge = calculDifferenceAge($ageJoueur1, $ageJoueur2);
echo "la différence d'âge est de : ".$differenceAge ."ans";

generateurDespace($separateur);
afficherMajeur($ageJoueur1);
generateurDespace($separateur);
afficherMajeur($ageJoueur2);
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

function calculDifferenceAge($ageDuJoueur1, $ageDuJoueur2)
{
    $resultat = $ageDuJoueur1 - $ageDuJoueur2;
    if ($resultat < 0) {
        $resultat = -$resultat;
    }
    return $resultat;
}

function generateurDespace($separateur)
{
    echo "<br/>";
    for($i = 0 ; $i < 25; $i++) {
        echo $separateur;
    }
    echo "<br/>";
}

function afficherMajeur($age) {
//    if($age > 18) {
//     echo "joueur majeur";
//    }else if($age === 18) {
//     echo "il est tout juste majeur";
//    }else if($age > 14) {
//     echo "il est adolescent";
//    }
//    else {
//     echo "c'est un enfant";
//    }
   switch($age) {
    case 21 :
    case 20 :
    case 19 : echo "il est majeur";
    break;
    case 18 : echo "il est tout juste majeur";
    break;
    case 17 : echo "il est encore mineur";
    break;
    case 16 : echo "il est mineur";
    break;
    default : echo "????";
    break;
   }
}
