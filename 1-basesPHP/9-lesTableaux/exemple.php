
<?php
define("SEPARATEUR", "+"); // UNE CONSTANTE AVEC LA VALEUR <+>

$joueur1 = ["Hatim", 20, true];

$joueur2 = ["Mélanie", 37, false];


print_r($joueur1);

echo "<br/>";

$text = test(40);
echo $text;
echo "<br/>";
generateurDespace(SEPARATEUR);
// afficherJoueur($joueur1[0], $joueur1[1], $joueur1[2]);
afficherTableau($joueur1);
generateurDespace(SEPARATEUR);
afficherTableau($joueur2);
generateurDespace(SEPARATEUR);
afficherJoueur($joueur2[0], $joueur2[1], $joueur2[2]);
generateurDespace(SEPARATEUR);
afficherJoueurLePlusAgee($joueur1[1], $joueur2[1]);
generateurDespace(SEPARATEUR);
$differenceAge = calculDifferenceAge($joueur1[1], $joueur2[1]);
echo "la différence d'âge est de : " . $differenceAge . "ans";

generateurDespace(SEPARATEUR);



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
    for ($i = 0; $i < 25; $i++) {
        echo $separateur;
    }
    echo "<br/>";
}


function afficherTableau($tab)
{
    //    $nombreCaseTableau = count($tab);
    //    for ($i = 0; $i < $nombreCaseTableau; $i++) {
    //     echo $tab[$i]."<br/>";
    //    }

    foreach ($tab as $indice => $value) {
        echo $indice . " : " . $value . "<br/>";
    }
}
