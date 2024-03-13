<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        
    </head>
    <body>
	<?php

	// REVISADO - OK
	
	include_once("conexao.php");

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$data_nascimento = $_POST['data_nascimento'];
		$sexo = $_POST['sexo'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];  
        
		$insere = mysqli_query ($conexao, “INSERT INTO Cliente (Nome_cliente, CPF, Telefone, Nascimento, Sexo, Email, Telefone)
        VALUES ('$nome', '$cpf', '$data_nascimento', '$sexo', '$email', '$telefone')”);

		or die (mysqli_error());
		echo “Cliente inserido com sucesso!”; 
		?>

    </body> 
</html>