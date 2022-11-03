<?php


class Personnage
{
    private $nom;
    private $img;
    private $age;
    private $sexe;
    private $force;
    private $agilite;

    function __construct($nom, $img, $age, $sexe, $force, $agilite)
    {
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
    }

    public function afficherMesInfos()
    {
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Age : </b>" . $this->age . "<br/>";
        if ($this->sexe) {
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force : </b>" . $this->force . "<br/>";
        echo "<b>Agilité : </b>" . $this->agilite . "<br/>";
    }
    public function afficherTemplate()
    {
        echo "<div class ='gauche'>";
        echo "<img src='./sources/images/" . $this->img . "'alt = '" . $this->img . "'/>";
        echo "</div>";
        echo "<div class= 'gauche'";
        $this->afficherMesInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
};
?>