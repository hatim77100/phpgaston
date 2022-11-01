<?php

$estUnHomme = true;
$nomJoueur1 = "Hatim";
$ageJoueur1 = 40;


$text = test(40);
echo $text;
echo "<br/>";
afficherJoueur($nomJoueur1, $ageJoueur1 , $estUnHomme);


function afficherJoueur($nom, $age, $boolean)
{
    echo "Nom du joueur1 : " . $nom;
    echo "<br/>";
    echo "Age du joueur1 : " . $age;
    $age = $age + 1;
    echo "<br/>";
    echo "Age du joueur1 : " . $age;
    echo "<br/>";

    if ($boolean === true) {
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
}
  function test ($c) {
    $a = 5;
    $b = 10;
    return $a + $b +$c;
  }
?>

