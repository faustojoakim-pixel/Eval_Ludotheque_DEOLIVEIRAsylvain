<?php
session_start();

$message="";

if(isset($_POST['submit'])){
    $_SESSION['email'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION[ 'nom'] = $_POST ['identifiant'];
    $_SESSION [ 'prenom'] = $_POST ['identifiant'];


if(isset($_POST['email'])){
     $message = $_SESSION['identifiant'] ." : ".$_SESSION['password'] {
       echo ("bonne authentification");
        }else{
         echo ("Email et/ou mot de passe incorrect ");
     }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('index.php') ?>
    <main>
        <h1>Accueil</h1>
        <section>
            <h2>Connexion</h2>
            <form action="" method="post">
                <input type="text" name="nom">
                <input type= "text" name "prenom">
                <input type="text" name="password">
                <input type="submit" name="submit">
            </form>
            <p><?php echo("Vous etes bien identifié") ?></p>
        </section>
    </main>
</body>
</html>






