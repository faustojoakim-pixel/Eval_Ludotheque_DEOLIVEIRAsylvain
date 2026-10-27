<?php
$erreurs = [];
$prenom = "";
$nom = "";
$email = "";
$password ="";

$prenom = trim($_POST['prenom']);
$nom = trim($_POST['nom']);
$password = trim($_POST['password']);


if (isset($_POST['submit'])){
    if(!empty($_POST['prenom']) && !empty($_POST['nom'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo ("Bon mot de passe");
        }else{
             echo("email non valide");
        if (strlen($_POST ['password']) >= 12) {
            echo("Bon mot de passe");
        }else{
            echo("mot de passe trop court");
            }     
        }

        }
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);



    


}









?>