<?php
require_once("./common/classes/personnage.class.php");
include("./common/header.php");
include("./common/menu.php");
?>
<h2> Personnage : </h2>
<?php
$p1 = new Personnage("Luke", "player.png", 40, true, 7, 5);
$p1->afficherTemplate();

echo "*************** </br>";

$p2 = new Personnage("Mélanie", "playerF.png", 37, false, 3, 2);
$p2->afficherTemplate();

echo "*************** </br>";

$p3 = new Personnage("Adham", "playerM.png", 4, true, 6, 9);
$p3->afficherTemplate();

?>

<?php
include("./common/footer.php");
?>