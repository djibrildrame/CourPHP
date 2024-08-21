<!DOCTYPE html>
<html>
<head>
    <title> Premier pas en PHP</title>
</head>
<body>

<h1> Premier pas dans la programmation web </h1>

<?php 

$a = 10;
$b = 12;

// Expression 1 : var_dump($a < $b && $a == $b)
var_dump($a < $b && $a == $b); 
// Résultat : bool(false)
// Explication : $a < $b (10 < 12) est true, mais $a == $b (10 == 12) est false.
// L'opérateur && (et) requiert que les deux conditions soient vraies pour retourner true.
// Comme une des conditions est false, le résultat est false.

// Expression 2 : var_dump($a < $b && $a <= $b)
var_dump($a < $b && $a <= $b); 
// Résultat : bool(true)
// Explication : $a < $b (10 < 12) est true, et $a <= $b (10 <= 12) est aussi true.
// L'opérateur && (et) requiert que les deux conditions soient vraies pour retourner true.
// Comme les deux conditions sont true, le résultat est true.

// Expression 3 : var_dump($a < $b || $a <= $b)
var_dump($a < $b || $a <= $b); 
// Résultat : bool(true)
// Explication : $a < $b (10 < 12) est true, et $a <= $b (10 <= 12) est aussi true.
// L'opérateur || (ou) requiert qu'au moins une des conditions soit vraie pour retourner true.
// Comme les deux conditions sont true, le résultat est true.

// Expression 4 : var_dump($a < $b || $a == $b)
var_dump($a < $b || $a == $b); 
// Résultat : bool(true)
// Explication : $a < $b (10 < 12) est true, et $a == $b (10 == 12) est false.
// L'opérateur || (ou) requiert qu'au moins une des conditions soit vraie pour retourner true.
// Comme une des conditions est true, le résultat est true.

?>

</body>
</html>
