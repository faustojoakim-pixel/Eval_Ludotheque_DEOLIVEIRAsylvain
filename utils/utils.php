<?php
function FormatJoueurs(int $min, int $max):string
{
    if($min === 1 && $max === 1) {
        return"Solo";
    }
     if($min === 2 && $max === 2 ) {
        return"X joueurs";
     }

     if($min === 2 && $max === 4 ) {
        return"X à Y joueurs";
     }

 function categorieDuree(int $minutes):string
 {
      if ($minutes < 30 ) {
          return "Partie rapide";
      }

      if ($minutes >= 30 && $minutes <= 90 ) {
        return "Partie Moyenne";
      }

      if ($minutes > 90) {
        return "Partie longue";
      }




 }    
    
    
    
    
    
        }












?>