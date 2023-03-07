<?php 
//Variable Scope / lingkup variabel
//Variable local
//Variable global
 
$x = 10;

function tampilX() {
    global $x;
    echo $x;
}

tampilX();

?>