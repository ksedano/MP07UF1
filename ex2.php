<?php
$i = 12;
$tipus_de_i = gettype( $i );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i\n<br>";
//La barra invertida davant el dollar fa que no mostri la variable si no el simbol dollar.
//La variable $i es de tipus integer.
//La funció gettype serveix per veure el tipus de la variable $i.
$f = 2.32;
$tipus_de_f = gettype( $f );
echo "La variable \$f conté el valor $f i és del tipus $tipus_de_f\n<br>";
$b = True;
$tipus_de_b = gettype( $b );
echo "La variable \$b conté el valor $b i és del tipus $tipus_de_b\n<br>";
$c = [2,"hola",16,"kevin"];
$tipus_de_c = gettype( $c );
echo "La variable \$c conté el valor $c i és del tipus $tipus_de_c\n<br>";

$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
//La variable $d es del tipus objecte.
?>