<?php
$numeros = [3,5,8,10,20,23,57];
//criar uma função para somar os valores
function soma($abacate){
    $soma = 0;
 for ($i=0; $i < count($abacate) ; $i++) { 
    //echo "$abacate[$i] <br>";
   $soma = $soma + $abacate[$i];//soma de todos 

   if ($abacate[$i] % 2 ==1 ) {
    echo "$abacate[$i] <br>";//mostrando somente os números impares dos vetores
   } 
 }
 echo "A soma é = $soma<br>";
}

soma($numeros);


?>