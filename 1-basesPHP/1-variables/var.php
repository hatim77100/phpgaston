 <?php 
    $nomDuJoueur1 = "Hatim";
    $age = 40;
    $estUnHomme = false;
    echo "Nom du joueur1 : " . $nomDuJoueur1;
    echo "<br/>";
    echo "Age du joueur1 : " . $age;
    $age =$age+1;
    echo "<br/>";
    echo "Age du joueur1 : " . $age;
    echo "<br/>";

    if($estUnHomme === true){
        echo "C'est un homme";
    } else { //$estUnHomme === false
        echo "C'est une femme";
    }
?> 