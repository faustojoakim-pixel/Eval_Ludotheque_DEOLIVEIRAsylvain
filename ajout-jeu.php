<?php
session_start();

if (!isset($_SESSION['id_membre'])) {
    header('location: connexion.php');
    exit;
}
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=ludotheque;charset=utf8mb4',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $request = $pdo->prepare(
        'SELECT id_categorie, nom_categorie
         FROM categorie
         ORDER BY nom_categorie'
    );
    $request->execute();
    $categories = $request->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $error) {
    die($error->getMessage());
}

$errors = [];


  if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    $titre        = trim($_POST['titre'] ?? '');
    $joueur_min    = filter_input(INPUT_POST, 'joueur_min', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $joueur_max    = filter_input(INPUT_POST, 'joueur_max', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $duree        = filter_input(INPUT_POST, 'duree', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $idCategorie  = filter_input(INPUT_POST, 'id_categorie', FILTER_VALIDATE_INT);
  

  if (empty($errors)){
     $request = $pdo->prepare ('INSERT INTO jeu (titre, joueur_min, joueur_max, duree, id_categorie, id_membre) VALUES(?, ?, ?, ?,?,?)'
     );
     $request->bindParam(1,$titre,PDO::PARAM_STR);
     $request->bindParam(2,$joueur_min,PDO::PARAM_INT);
     $request->bindParam(3,$joueur_max,PDO::PARAM_INT);
     $request->bindParam(4,$duree,PDO::PARAM_INT);
     $request->bindParam(5,$id_categorie,PDO::PARAM_INT);
     $request->bindParam(6, $_SESSION['id_membre'], PDO::PARAM_INT);
     $request->execute();

    $message = "Le jeu « " . htmlspecialchars($titre) . " » a bien été ajouté.";
    }


?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="ajout-jeu.php" method="post">
            <div>
            <label for="titre">titre</label> <input type="text" name="titre" id="id_jeu">
                <label for="joueur_min">joueur_min</label> <input type="number" name="joueur_min" id="id_membre">
                <label for="joueur_max">joueur_max</label> <input type="number" name="joueur_max" id="id_membre">
                <label for="duree">duree</label> <input type="number" name="duree" id="id_jeu">
                <input type="submit" name="submit">
</div>
            </form>











    </main>
    
</body>
</html>











