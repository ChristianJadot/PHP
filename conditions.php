<?php
$temperature = 21;

if ($temperature >= 15) {
    // code à exécuter si la condition donne TRUE
    $clothes = "T-shirt";
    $should_i_wear_a_scarf = false;
  } else {
    // code à exécuter si la condition donne FALSE
    $clothes = "Pull-over";
    $should_i_wear_a_scarf = true;
  }
  echo "$clothes";
  if ($should_i_wear_a_scarf == true){
      // c'est une fonction "FALSE" pour le bien de l'exemple 
      // cette fonction n'est exécutée que dans la condition est TRUE
      grab_scarf_from_door_hanger();
  }
  // La fonction suivante sera exécutée à chaque fois, 
  // mais son argument $clothes change en fonction du résultat
  // de notre structure conditionnelle précédente cover_my_chest_with($clothes);

?>