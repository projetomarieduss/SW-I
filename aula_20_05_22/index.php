<?php
    $valor = 9;

    if($valor < 10){
        //VERDADEIRO
        //IR PARA A PÁGINA adm.php
        header('Location: adm.php');
        exit();


        // MESMA COISA COM JS
        // echo '
        // <script type="text/javascript">
        //     alert ("OK tudo certo, vamos para a página adm.php")
        // </script>
        // ';


        /*echo '
        <script type="text/javascript">
        window.location = "adm.php"
        </script>'
        ;*/
    }

    else{
        //FALSO
        //IR PARA A PÁGINA erro.php
        header('Location: erro.php');
        exit();

    }



?>