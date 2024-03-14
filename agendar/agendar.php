<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
</head>
<body>
    
    <?php
    
        include_once('../conexao.php');

        $data = $_POST['dateConsulta'];
        $horario = $_POST['horaConsulta'];
        $tipo = $_POST['tipoConsulta'];
        $cpf = $_POST['cpf'];


        $insere = mysqli_query($conexao, "INSERT INTO consulta (Data_consulta, Horario, Tipo_consulta, cpf) VALUES ('$data', '$horario', '$tipo', '$cpf')") or die (mysqli_error());

        

        echo "Consulta marcada com sucesso!";
    
    ?>

</body>
</html>