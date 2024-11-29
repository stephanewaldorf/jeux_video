<?php
//ETAPE 2 PHP
  require_once "header.php";

  require_once "fonctions.php";

if (Isset($_POST['inscription'])) {
    echo $_POST['prenom'];
    echo $_POST['nom'];
    echo $_POST['email'];
    echo $_POST['pwd'];

AjouterunNouvelUtilisateurDansLaBdd($_POST["prenom"],$_POST["nom"],$_POST["email"],$_POST["pwd"]);

}


?>
<!-- ETAPE 1 HTML-->
<form action="" method="post">
    <div>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
    </div>
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>
    <div>
        <label for="email">eMail</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd">
    </div>
    <input type="submit" value="Je crée mon compte" name="inscription">
    </form>