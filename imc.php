<?php

$taille=178;

$poids=72;


$imc=$poids/($taille*$taille);

$imc = ceil($imc * 10000); /// arrondit au supérieur

echo 'Bonjour  Votre IMC (indice de masse corporelle) est exactement : '.$imc.'';



if ($imc<16.5){

$verdict='Vous êtes en dénutrition.';

}

elseif ($imc<18.5){

$verdict='Vous êtes maigre.';

}

elseif ($imc<25){

$verdict='Vous avez une corpulence normale.';

}

elseif ($imc<30){

$verdict='Vous êtes en surpoids.';

}

elseif ($imc<35){

$verdict='Vous êtes en état d\'obésité modérée.';

}

elseif ($imc<40){

$verdict='Vous êtes en état d\'obésité sévère.';

}

else{

$verdict='Vous êtes en état d\'obésité massive.';

}



echo $verdict;



?>