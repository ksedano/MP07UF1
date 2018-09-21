<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d\n<br>";
//La variable $d es del tipus objecte.
//La invocació del metode format de la classe DateTime retorna la data del día d'avui.
//echo "el valor de \$d és $d" donaría error perque tens que indicar el format.
$classe_de_d = get_class( $d );
echo "La classe de la variable objecte \$d es $classe_de_d"
?>