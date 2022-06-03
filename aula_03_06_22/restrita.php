<?php
session_start();
if ($_SESSION['logado'] != 1) {
    header("Location: index.html");
}

$nome = $_SESSION['nome'];
echo "Bem-Vinda $nome <br>";
echo "Você está na página restrita";
echo "<hr>";


echo "<a href='logout.php'> Sair</a>";
 

?>