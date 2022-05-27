<?php
    $ meses = [ "Janeiro" , "Fevereiro" , "Março" , "Abril" , "Maio" , "Junho" , "Julho" , "Agosto" , "Setembro" , "Outubro" , "Novembro" , "Dezembro " ];
    $ digitado = 5 ;

    if ( $ digitado >= 1 e $ digitado <= 12 ){
        $ digitado = ( $ digitado - 1 );
        echo  "O mês escolhido é: $meses[$digitado]" ;
    }
    senão {
        echo  "<script>alert('DIGITE UM NUMERO ENTRE 1 E 12')</script>" ;
       
    };

?>
