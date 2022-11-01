<?php 
    $nomJoueur1 = "Hatim";
    $ageJoueur1 = 40;
    $estUnHommeJoueur1 = false;
    ?>
    Nom du joueur1 : <?php echo $nomJoueur1; ?>
    <br/>
    Age du joueur1 : <?php echo $ageJoueur1; ?>
  <?php  $ageJoueur1 =$ageJoueur1+1 ?>
    <br/>
    Age du joueur1 : <?php $ageJoueur1; ?>
    <br/>

 <?php   if($estUnHommeJoueur1 === true){
    ?> 
    C'est un homme
 <?php   } else { //$estUnHomme === false} ?>
     C'est une femme
 <?php  }?>   
  