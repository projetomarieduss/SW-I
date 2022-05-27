<?php
//1- FUNÇÃO SEM RETORNO E SEM PAREMETROS
echo " <strong>1- FUNÇÃO SEM RETORNO E SEM PAREMETROS <br></strong>";
  function teste(){
      echo "Maria Eduarda ";}
  teste();//chamando a função
echo '<hr>';


//2- FUNÇÃO COM RETORNO E SEM PAREMETROS
echo "<strong>2- FUNÇÃO COM RETORNO E SEM PAREMETROS <br></strong>";
  function teste2(){
  $retorno = "Outro textinho";
  return $retorno;
}
  $recebe = teste2();//chamando a função
  echo "$recebe <br>";
  echo '<hr>';


//3- FUNÇÃO SEM RETORNO E COM PAREMETROS
echo "<strong>3- FUNÇÃO SEM RETORNO E COM PAREMETROS <br></strong>";
function teste3($a){
echo "$a <br>";
}
teste3('OI GALERA LINDA!!.');//chamando a função
echo '<hr>';

//4- FUNÇÃO COM RETORNO E COM PAREMETROS
echo " <strong>4- FUNÇÃO COM RETORNO E COM PAREMETROS <br></strong>";
  function teste4($x,$y){
      $soma = $x + $y;
      return $soma;
    }
  $resultado = teste4(10,20);//chamando a função
  echo "A soma é = $resultado <br>";
echo '<hr>';


?>