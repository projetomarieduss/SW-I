<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php
    for($i=0;$i<10;$i++){
        $sort[$i]=rand(1,100);
        $media = $sort/10;
        echo "<br> $media";
    }
    ?>
    
</body>
</html>