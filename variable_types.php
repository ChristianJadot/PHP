<?php

$monPrenom = "Christian";
$monAge = 57;
$mesYeux = "bleus";
$maFamille = array (
    0 => "Frédérique" , 
    1 => "Dylan" , 
    2 => "Lara" , 
    3 => "Marie" ,);
$jaiFaim = true;

?>
<p>
    <?php echo "Salut ! Mon nom est " . $monPrenom ?>
</p>
<p>
    <?php echo "J'ai " . $monAge . " ans." ?>
</p>
<p>
    <?php echo "Mes yeux sont " . $mesYeux ?>
</p>
<p>
    <?php echo "Le membre le plus important de ma famille est " . $maFamille[0] ?>
</p>
<p>
    <?php echo "Est-ce que j'ai faim ? " . $jaiFaim ?>
</p>