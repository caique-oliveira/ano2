<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<?php
/* Author: Wendreo L. Fernandes, Date: 04/04/17 */
$y = isset($_GET["year"])?$_GET["year"]:0;

echo "O ano de $y: <b>" . ano_bissexto($y) . "</b>";

function ano_bissexto($valor){
    if(($valor % 4) ==0 && !($valor %100) ==0 |  ($valor % 400) ==0){
        return "É BISEXTO";
    }else{
        return "Não é BISEXTO";
    }
}

?>
<br/><br/><a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>