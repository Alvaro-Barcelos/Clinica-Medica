<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
		<link rel="stylesheet" href="style.css">
        
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

	// REVISADO - OK
	
	include_once("../conexao.php");

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$data_nascimento = $_POST['data_nascimento'];
		$sexo = $_POST['sexo'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];  
        
		$insere = mysqli_query ($conexao, "INSERT INTO Cliente (CPF, Nome_cliente, Nascimento, Sexo, Email, Telefone)
        VALUES ('$cpf', '$nome', '$data_nascimento', '$sexo', '$email', '$telefone')") or die (mysqli_error());

		
		echo "Cliente inserido com sucesso!"; 
		?>

    </body> 
</html>