<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$user = 'Meriesow';
$pass = '130475';


if (($usuario == $user) && ($senha == $pass)) {
 //echo "Okay usuário validado";
 session_start();
 $_SESSION['nome']= $usuario;
 $_SESSION['logado']= 1;

 header("Location: restrita.php");
} else {
    echo "Usuário e/ou senha estão incorretos";
   
}


?>