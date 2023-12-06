<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo de array em php</title>
</head>
<body>
    <?php

    $nomes = array ("joão ", "maria", "pedro","ana");
    echo "<h2>lista de nomes</h2>";
    echo "<ul>";
   // unset($nomes[1]);
    //unset($nomes[2]);
    sort($nomes);

    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    echo "</ul>";
     echo "<ul>";

    $nomes = array ("alex","gabriel","wada", "ricardo");
    foreach ($nomes as $nome){
        echo "<li>$nome</li>";
    
    }
    echo "</ul>";

    ?>
</body>
</html>
