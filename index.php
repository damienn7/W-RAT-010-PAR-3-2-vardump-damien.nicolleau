<?php

error_reporting(E_ERROR | E_PARSE);

// 1 - Nombre entier

$int = 1;

var_dump($int);

// output : int(1)

// -------------------------

// 2 - Nombre décimale

$float = 1.5;

var_dump($float);

// output : float(1.5)

// -------------------------

// 3 - Chaîne de caractère

$string = "1.5";

var_dump($string);

// output : string(3) "1.5"

// -------------------------

// 4 - Tableau multidimensionnel numéroté


// -------------------------

// 5 - Tableau multidimensionnel associatif

/*Tableau multidimensionnel numéroté stockant
*des tableaux numérotés*/
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];

/*Tableau multidimensionnel numéroté stockant
 *des tableaux associatifs et une valeur simple*/
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    'Florian'
];

/*Tableau multidimensionnel associatif stockant
 *des tableaux associatifs*/
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];

?>