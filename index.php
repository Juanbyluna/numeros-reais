<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
function verificarNumero($numero) {
    if ($numero == 0) {
        echo "O número $numero é neutro";
    } else {

    
    // Verificar se é par ou ímpar
    $parOuImpar = ($numero % 2 == 0) ? "par" : "ímpar";
    
    // Verificar se é redondo ou quebrado
    $redondoOuQuebrado = (is_int($numero) || $numero == (int)$numero) ? "redondo" : "quebrado";
    
    // Verificar se é negativo ou positivo
    if ($numero > 0) {
        $positivoOuNegativo = "positivo";
    } elseif ($numero < 0) {
        $positivoOuNegativo = "negativo";
    }
    
    // Retornar a string com os resultados
    return "O número $numero é $parOuImpar, $redondoOuQuebrado e $positivoOuNegativo.";
} 
}

// Exemplo de uso da função com 5 números
$numeros = [5, 2, -4, 0, 3];

foreach ($numeros as $numero) {
    echo verificarNumero($numero) . "<br>";
}
?>

</body>
</html>