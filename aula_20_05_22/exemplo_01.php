<?php 
   $teste = /*vetor em php é com $*/ [10, 'oi', 1.6, true];
   // ou $teste =array(10, 'oi', 1.6, true);
   /*mostrar vetor no php: echo $teste[1];*/
   $qtde = count($teste);
   echo "Números de elementos: $qtde";
   echo "<hr>";
   for ($i=0; $i <$qtde ; $i++) { 
      echo "Valor do i : $i seu valor: $teste[$i] <br>";
   }
   echo "<hr>";

   $numqlqr= rand(1,10);
   $resul = $numqlqr/10;
   echo "Número aleátorio de 1 a 10= $resul";
   echo "<hr>";
   //ou
   $numqlqr= (rand(1,10))/10;
   echo "Número aleátorio de 1 a 10= $numqlqr";
   echo "<hr>";

   $vetor = [1,5,8,10];
   $n = count($vetor);
   $soma = 0;
   for ($in=0; $in <$n ; $in++) { 
    echo "Valor do i : $in seu valor: $vetor[$in] <br>";
    $soma = $soma + $vetor[$in];  //<-acumulador
    $div = $soma/ $n;
 }
    echo "Soma de todos :$soma <br>";
    echo "Valor da média: $div";
    echo "<hr>";

?>