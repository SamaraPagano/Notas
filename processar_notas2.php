<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="colegio-pedro-II-850x574-removebg-preview.png">
    <title>Gerenciador de Notas</title>
</head>
<body>
<div class="container">
    <h2>Gerenciador de Notas</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nome = $_POST["nome"];
        $serie = $_POST["serie"];
        $materia = $_POST["materia"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Série:</strong> $serie</p>";
        echo "<p><strong>Matéria:</strong> $materia</p>";
        echo "<p><strong>1º Bimestre:</strong> $nota1</p>";
        echo "<p><strong>2º Bimestre:</strong> $nota2</p>";
        echo "<p><strong>3º Bimestre:</strong> $nota3</p>";

        //Cálculo da média
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p><strong>Média:</strong> $media</p>";
    }
    ?>
    </div>
</body>
</html>