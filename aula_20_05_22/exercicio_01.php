<?php 
 $meses = [0,'janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro', 'novembro', 'dezembro'];
 $qtde = count($meses);
 echo "Quantidade de valores: $qtde e seus valores";
 echo "<hr>";
 for ($i=0; $i <$qtde ; $i++) { 
    echo "Valor do i : $i seu valor: $meses[$i] <br>";
 }
$num_esc = $meses[3];
echo "<hr>";
echo "Variavel escolhida : $num_esc";

 ?>