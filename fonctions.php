<?php
function connexionALaBDD(){

    try{
        $username="root";
        $pwd="";
        return new PDO('mysql:host=localhost;dbname=jeux_video',$username,$pwd);
    } catch (Exception $ex) {
        die($ex-getMessage());
    }

}

function ajouterUnNouvelUtilisateurDansLaBdd($prenom,$nom,$email,$pwd): bool {
     $db = connexionALaBDD();

     $sql = $db->prepare("INSERT INTO user(prenom,nom,email,pwd)VALUES (:prenom,:nom,
     :email,:pwd)");

     $hash = password_hash($pwd, PASSWORD_DEFAULT);
     
     
     
     $sql->bindValue(":prenom",$prenom);
     $sql->bindValue(":nom",$nom);
     $sql->bindValue(":email",$email);
     $sql->bindValue(":pwd",$pwd);


    $sql->execute();

    if($sql->rowCount() > 0){
        return true;
    } else {
        return false;
    }
}
function checkEmail($email_verif) : bool {
    $db = connexionALaBDD();
    $sql = $db->prepare(
        "SELECT email FROM user WHERE email LIKE :email LIMIT 1"
    );
    $sql->bindValue(":email", $email_verif);
    $sql->execute();

    if ($sql->rowCount() >0) {
        return true;
    }else{
        return false;
}}
?>
