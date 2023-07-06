<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Notas</title>
</head>
<body>
    <h1>Gerenciador de Notas</h1>
    <form action="processar_notas.php" method="post">
        <div class="container">
          <div class="info">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required> <br><br>
            <label for="serie">Série:</label>
            <input type="text" name="serie" id="serie" required> <br><br>
            <label for="materia">Matéria:</label>
            <input type="text" name="materia" id="materia" required> <br><br>
            <label for="nota1">1º Bimestre:</label>
            <input type="number" name="nota1" id="nota1" required> <br><br>
            <label for="nota2">2º Bimestre:</label>
            <input type="number" name="nota2" id="nota2" required> <br><br>
            <label for="nota3">3º Bimestre:</label>
            <input type="number" name="nota3" id="nota3" required> <br><br>

            <input type="submit" value="Salvar Notas">
         </div>
        </div>
    </form>
</body>
</html>