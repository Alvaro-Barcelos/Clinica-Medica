<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Clinica Medica</title>
            <link rel="stylesheet" href="lista.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                        <li><a href="../agendar/agen_m.php">Agendar</a></li>
                        <li><a href="../cadastrar/cadastrar.html">Cadastrar</a></li>
                        <li><a href="../consultas/consulta.html">Consultas</a></li>
                    </ul>                    
                </nav>
                 
            </div>
        </section>
	<div class="cadastrar">
	
	<form action="" method="POST">
		<fieldset>
		<table>
			<tr>
			
				<td>
				<?php
                    // importa dados de conexão
                    include_once('../conexao.php');

                    $opcao = $_POST['escolha'];

                    if($opcao == 1){
                        // Verifica se os dados foram enviados via POST
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Escapar os valores dos campos
                            $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
                            $cliente = mysqli_real_escape_string($conexao, $_POST['cliente']);
                            $nascimento = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
                            $sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
                            $email = mysqli_real_escape_string($conexao, $_POST['email']);
                            $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
    
                            // Verifica se os valores não estão vazios
                            if (!empty($cpf) && !empty($cliente) && !empty($nascimento) && !empty($sexo) && !empty($email) && !empty($telefone)) {
                                // Atualiza os dados no banco de dados
                                $consulta = mysqli_query($conexao, "UPDATE cliente 
                                    SET Nome_cliente = '$cliente',
                                        Nascimento = '$nascimento',
                                        Sexo = '$sexo',
                                        Email = '$email',
                                        Telefone = '$telefone'
                                    WHERE CPF = '$cpf'");
                                
                                if ($consulta) {
                                    echo "Atualização feita com sucesso!!!";
                                } else {
                                    echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
                                }
                            } else {
                                echo "Todos os campos são obrigatórios.";
                            }
                        }
                    }

                    else{
                        $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);

                        $exclui = mysqli_query($conexao, "DELETE FROM cliente WHERE CPF = '$cpf' ");
                        echo "Cliente excluído com sucesso do Sistema!";
                    }
                    
                    ?>
				</td>
			</tr>
		</table>
		</fieldset>
		</form>
	
  </div>
  </body>
</html>