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
// 5 - Tableau multidimensionnel associatif

/*Tableau multidimensionnel numéroté stockant
*des tableaux numérotés*/
$suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];

var_dump($suite);

// output :
//
// array(2) {
//     [0]=>
//     array(5) {
//       [0]=>
//       int(1)
//       [1]=>
//       int(2)
//       [2]=>
//       int(4)
//       [3]=>
//       int(8)
//       [4]=>
//       int(16)
//     }
//     [1]=>
//     array(5) {
//       [0]=>
//       int(1)
//       [1]=>
//       int(3)
//       [2]=>
//       int(9)
//       [3]=>
//       int(27)
//       [4]=>
//       int(81)
//     }
//   }

/*Tableau multidimensionnel numéroté stockant
 *des tableaux associatifs et une valeur simple*/
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    'Florian'
];

var_dump($utilisateurs);

// output : 
//
// array(4) {
//     [0]=>
//     array(2) {
//       ["nom"]=>
//       string(8) "Mathilde"
//       ["mail"]=>
//       string(14) "math@gmail.com"
//     }
//     [1]=>
//     array(2) {
//       ["nom"]=>
//       string(6) "Pierre"
//       ["mail"]=>
//       string(23) "pierre.giraud@edhec.com"
//     }
//     [2]=>
//     array(2) {
//       ["nom"]=>
//       string(8) "Amandine"
//       ["mail"]=>
//       string(14) "amandine@lp.fr"
//     }
//     [3]=>
//     string(7) "Florian"
//   }

/*Tableau multidimensionnel associatif stockant
 *des tableaux associatifs*/
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];

var_dump($produits);

// output : 
//
// array(2) {
//     ["Livre"]=>
//     array(3) {
//       ["poids"]=>
//       int(200)
//       ["quantite"]=>
//       int(10)
//       ["prix"]=>
//       int(15)
//     }
//     ["Stickers"]=>
//     array(3) {
//       ["poids"]=>
//       int(10)
//       ["quantite"]=>
//       int(100)
//       ["prix"]=>
//       float(1.5)
//     }
//   }

?>