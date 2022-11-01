
    <?php 
        include("./common/header.php");
        include("./common/menu.php");
    ?>
    <h1 class="titreBleu"> Formulaire </h1>
    <form action="#" method="POST">
        <fieldset>
            <legend>Informations</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="age">Age :</label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
    <?php
    if(isset($_POST["nom"])) {
        echo "<div class=\"resultat\">";
        echo "Le nom est : ".$_POST["nom"];
        if (isset($_POST["age"])) {
            echo "<br/>";
           echo "L'âge est : ".$_POST["age"];
        }
        echo "</div>";
    }
    include("./common/footer.php");
    ?>
