<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    
</head>
<body>
    <main> 
        <h1>Resultado final</h1>
    <p>
        <?php 
        $n = $_REQUEST("num") ?? 0;
        $a = $n - 1;
        $s = $n + 1;
        echo "<br>O número escolhido <strong> $n</strong>";
        echo "<br>O número antecessor <em> é $a";
        echo "<br>O número sucessor <em> é $s </em>";
        ?>
    </p>
    <button>Voltar</button>
    <main> 
</body>
</html>