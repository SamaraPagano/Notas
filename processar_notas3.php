<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Notas</title>
</head>
<body>
<?php
    $ensino_options = array(
        'regular' => 'Ensino Regular',
        'tecnico' => 'Ensino Técnico'
    );


    $serie_options = array(
        '1' => '1º Ano',
        '2' => '2º Ano',
        '3' => '3º Ano'
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $serie = $_POST["serie"];
        $ensino = $_POST["ensino"];
        $materia = $_POST["materia"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];


        echo "<div class='container'>";
        echo "<h2>Notas Armazenadas</h2>";
        echo "<div class='info'>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Série:</strong> $serie_options[$serie]</p>";
        echo "<p><strong>Ensino:</strong> $ensino_options[$ensino]</p>";
        echo "<p><strong>Matéria:</strong> $materia</p>";
        echo "<p><strong>1º Bimestre:</strong> $nota1</p>";
        echo "<p><strong>2º Bimestre:</strong> $nota2</p>";
        echo "<p><strong>3º Bimestre:</strong> $nota3</p>";


        // Cálculo da média
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p><strong>Média:</strong> $media</p>";


        // Determinar a situação do aluno
        $situacao = '';
        if ($media >= 7) {
            $situacao = 'Aprovado';
        } elseif ($media >= 5) {
            $situacao = 'Recuperação';
        } else {
            $situacao = 'Reprovado';
        }
        echo "<p><strong>Situação:</strong> $situacao</p>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='container'>";
        echo "<h2>Armazenar Notas</h2>";
        echo "<form method='POST' action=''>";
        echo "<label for='nome'>Nome:</label>";
        echo "<input type='text' id='nome' name='nome' required>";
        echo "<br><br>";
        echo "<label for='serie'>Série:</label>";
        echo "<select id='serie' name='serie' required>";
        echo "<option value=''>Selecione a Série</option>";
        foreach ($serie_options as $serie => $serie_text) {
            echo "<option value='$serie'>$serie_text</option>";
        }
        echo "</select>";
        echo "<br><br>";
        echo "<label for='ensino'>Ensino:</label>";
        echo "<select id='ensino' name='ensino' required>";
        echo "<option value=''>Selecione o Ensino</option>";
        foreach ($ensino_options as $ensino => $ensino_text) {
            echo "<option value='$ensino'>$ensino_text</option>";
        }
        echo "</select>";
        echo "<br><br>";
        echo "<label for='materia'>Matéria:</label>";
        echo "<select id='materia' name='materia' required>";
        echo "<option value=''>Selecione a Matéria</option>";
        
        if (!empty($serie) && !empty($ensino))
        {
            $materias_opcoes == array();

            if ($ensino == 'Regular')
            {
                if ($serie == '1')
                {
                    $materias_opcoes = array('Biologia', 'Desenho', 'Ed.Física', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Sociologia');
                }
                elseif ($serie == '2')
                {
                    $materias_opcoes = array('Biologia', 'Desenho', 'Ed.Física', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Sociologia');
                }
                elseif ($serie == '3')
                {
                    $materias_opcoes = array('Biologia', 'Desenho', 'Ed.Física', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Sociologia');
                }
            }
            elseif ($ensino == "Tecnico")
            {
                if ($serie == '1')
                {
                    $materias_opcoes = array('Biologia', 'Desenho', 'Ed.Física', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Sociologia','ICC', 'Linguagem de Programação 1');
                }
                elseif ($serie == '2')
                {
                    $materias_opcoes = array('Biologia', 'Desenho', 'Ed.Física', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Sociologia','Banco de Dados', 'Linguagem de Programação 2');
                }
                elseif ($serie == '3')
                {
                    $materias_opcoes = array('Biologia', 'Desenho', 'Ed.Física', 'Filosofia', 'Física', 'Geografia', 'História', 'Inglês', 'Literatura', 'Matemática', 'Português', 'Sociologia','Engenharia de Software', 'Linguagem de Programação 3', 'Lingaugem de Programação 4');
                }
            }

            foreach ($materias_opcoes as $materia_opcao)
            {
                echo "<option value='$materia_opcao'>$materia_opcao</option>";
            }
        }
        echo "</select>";
        echo "<br><br>";
        echo "<label for='nota1'>1º Bimestre:</label>";
        echo "<input type='number' id='nota1' name='nota1' min='0' max='10' step='0.1' required>";
        echo "<br><br>";
        echo "<label for='nota2'>2º Bimestre:</label>";
        echo "<input type='number' id='nota2' name='nota2' min='0' max='10' step='0.1' required>";
        echo "<br><br>";
        echo "<label for='nota3'>3º Bimestre:</label>";
        echo "<input type='number' id='nota3' name='nota3' min='0' max='10' step='0.1' required>";
        echo "<br><br>";
        echo "<input type='submit' value='Armazenar Notas'>";
        echo "</form>";
        echo "</div>";
    }
    ?>
</body>
</html>