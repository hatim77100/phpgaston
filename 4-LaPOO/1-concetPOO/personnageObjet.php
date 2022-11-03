<?php

class Personnage{
    public $nom = "Luke";
    public $img = "player.png";
    public $age = 27;
    public $sexe = true;
    public $force = 5;
    public $agilite = 4;

    public function afficherMesInfos(){
        echo "<b>Nom : </b>" . $this->nom ."<br/>";
        echo "<b>Age : </b>" . $this->age ."<br/>";
        if($this->sexe) {
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force : </b>" . $this->force ."<br/>";
        echo "<b>Agilité : </b>" . $this->agilite ."<br/>";
    }
    public function afficherTemplate() {
        echo "<div class ='gauche'>";
        echo "<img src='./sources/images/".$this->img . "'alt = '".$this->img."'/>" ;
        echo "</div>";
        echo "<div class= 'gauche'";
        $this->afficherMesInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
};

include("./common/header.php");
include("./common/menu.php");
?>

<h2> Personnage : </h2>

<?php 
 $p1 = new Personnage();
 $p1 -> afficherTemplate();

echo "*************** </br>";
 $p2 = new Personnage();
 $p2-> nom = "Katy";
 $p2-> age = 25;
 $p2->sexe = false;
 $p2->force= 3;
 $p2->agilite=7;
 $p2->img = "playerF.png";
 $p2 -> afficherTemplate();

?>

<?php
    include("./common/footer.php")
?>

