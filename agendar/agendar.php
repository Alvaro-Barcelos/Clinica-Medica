<!DOCTYPE html>

<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
            <link rel="stylesheet" href="agendar.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>

	<header>
            <div class="container">
                
                <p>Rua dos aimores, 469 - Centro - Belo Horizonte</p>
                

                <nav>
                    <ul>
                        <li><a href="">Telefone</a></li>
                        <li><a href="#local">Mapa</a> </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div>
                <img src="../imagens/logo.png" alt="" height="50px" width="50px">
                <h5>Clinica Ara</h5>
                
                
                <nav>
                    <ul>
                        <li><a href="../home/home.html">Home</a></li>
                        <li><a href="../home/home.html">Sobre nos</a></li>
                        <li><a href="../agendar/agendar.html">Agendar</a></li>
                        <li><a href="../cadastrar/cadastrar.html">Cadastrar</a></li>
                        <li><a href="../consultas/consulta.html">Consultas</a></li>
                    </ul>                    
                </nav>
                 
            </div>
        </section>
        <?php
            include_once('../conexao.php');

            $data = $_POST['dateConsulta'];
            $horario = $_POST['horaConsulta'];
            $cpfCliente = $_POST['cpf'];
            $cpfMedico = $_POST['medicoCpf'];

            // Consulta ao banco de dados para obter a especialidade do médico
            $consultaEspecialidade = mysqli_query($conexao, "SELECT Especialidade FROM Medico WHERE Cpf_Medico = '$cpfMedico'");
            $linhaEspecialidade = mysqli_fetch_array($consultaEspecialidade);
            $especialidadeMedico = $linhaEspecialidade['Especialidade'];

            // Inserir os dados da consulta no banco de dados, incluindo o tipo de consulta médica associado à especialidade do médico
            $insere = mysqli_query($conexao, "INSERT INTO Consulta (Data_consulta, Horario, Tipo_consulta, CPF_cliente, Cpf_Medico) VALUES ('$data', '$horario', '$especialidadeMedico', '$cpfCliente', '$cpfMedico' )") or die (mysqli_error($conexao));

            echo "<div class='aviso'>";
            echo "<p>Consulta agendada com sucesso!</p>"; 
            echo "</div>";
        ?>


</body>
</html>