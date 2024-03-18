<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Clinica Medica</title>
            <link rel="stylesheet" href="../cadastrar/style.css">
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
	<div class="cadastrar">
	
	<form action="" method="">
		<fieldset>
		<legend>Consultar Dados</legend>
		<table>
			<tr>
			
				<td>
				<?php
					
					// importa dados de conexão
					include_once('../conexao.php');
					
					
                    $cpf = $_POST['cpf'];
                    $cliente = $_POST['cliente'];
                    $nascimento = $_POST['data_nascimento'];
                    $sexo = $_POST['sexo'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];

					$consulta = mysqli_query($conexao, "UPDATE cliente 
                    SET CPF = '$cpf',
                        Nome_cliente = '$cliente',
                        Nascimento = '$nascimento',
                        sexo = '$sexo',
                        email = '$email',
                        telefone = '$telefone'
                    WHERE CPF = '$cpf'");
					
                    echo"Atualização feita com sucesso!!!";
				?>
				</td>
			</tr>
		</table>
		</fieldset>
		</form>
	
  </div>
  </body>
</html>