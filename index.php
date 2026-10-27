<?php
session_start();
try {
$pdo = new PDO('mysql:host=localhost;dbname=ludotheque','root','root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$request = $pdo ->prepare('SELECT j.titre, c.nom_categorie FROM jeu AS j INNER JOIN categorie AS c ON j. id_categorie = c.id_categorie ORDER BY titre;');
 $request->execute();
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error) {
    die($error->getMessage());
}






$liste="";
foreach($data as $tab){
    $titre     = htmlspecialchars($tab['titre']);
    $categorie = htmlspecialchars($tab['nom_categorie']);
    $liste .= "<li>{$titre} : {$categorie}</li>";
}
 
  function FormatJoueurs(int $joueur_min, int $joueur_max):string
{
    if($joueur_min === 1 && $joueur_max=== 1) {
        return"Solo";
    }
     if($joueur_min === 2 && $joueur_max === 2 ) {
        return"2 joueurs";
     }

     if($joueur_min === 2 && $joueur_max === 4 ) {
        return"2 à 4 joueurs";
     }

}

   function categorieDuree(int $duree):string
 {
      if ($duree < 30 ) {
          return "Partie rapide";
      }

      if ($duree >= 30 && $duree <= 90 ) {
        return "Partie Moyenne";
      }

      if ($duree > 90) {
        return "Partie longue";
      }

    foreach($membre as $prenom){
        $message = "[$prenom] à ajouté tel [$jeu]";
    } 

   



 }    

?>