<?php

/**********Déclaration et initialisation d'une variable************/

$Prenom="toto"; // La variable $Prenom a comme valeur "toto"

$a=$a+$b; // La variable $a a la valeur de la somme de $a + $b
$a-=$b; // La variable $a a la valeur de $b



/************ Incrémentation décrémentation ***************/
//++	Ajoute 1	$i ++ (n'est rien d'autre que l'abbréviation de $i=$i+1)
//--	Soustrait 1	$i -- (equivalent à $i=$i-1)

$a = $a+1 ; // identique à la ligne ci dessous
$a ++ ; // Permet d'incrémenter
$a -- ; // Permet de décrémenter



/**********Déterminer le type de variable************/
///Retourne TRUE (1) si c'est vrai, FALSE (Rien) si c'est faux.

//Fonction	retourne TRUE si la variable est :
is_array();	//un tableau
is_bool();	//de type booléen
is_double() || is_float() || is_real(); //	un nombre réel, ou à virgule flottante
is_int() || is_long(); //	un nombre entier
is_null(); //	sans valeur
is_numeric();//	un nombre, ou une chaîne numérique
is_object();//	un objet
is_resource();//	une ressource PHP (pointeur, requête SQL...)
is_scalar();//	une variable scalaire
is_string();//	une chaîne de caractére

/************ Tester le type de variable avec gettype ************/

$Prenom="Ahmed"; // Variable string
$Valeur=123; // Variable integer
// Affiche le type de la variable
echo gettype($Prenom);
echo "<br />";
echo gettype($Valeur);
?>