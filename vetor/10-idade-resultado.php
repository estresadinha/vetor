<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo de idade</title>
</head>
<body>
<h1> calculo de idade</h1>
<?php
 $nome = $_REQUEST["nome"];
 $nasc = $_REQUEST ["nasc"];
 $atual = data("y");
 $idade = $atual - $nasc;
 echo $nome . " a sua idade é " . $idade . "anos";
 ?>
 <p>
 <input type= "button" value = "voltar" onclik= "javascript:history.back();">
</P>
</body>
</html>