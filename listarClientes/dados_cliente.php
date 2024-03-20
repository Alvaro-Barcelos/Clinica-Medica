<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Clinica Medica</title>
            <link rel="stylesheet" href="lista.css">
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
                        <li><a href="../agendar/agen_m.php">Agendar</a></li>
                        <li><a href="../cadastrar/cadastrar.html">Cadastrar</a></li>
                        <li><a href="../consultas/consulta.html">Consultas</a></li>
                    </ul>                    
                </nav>
                 
            </div>
        </section>
	<div class="cadastrar">
	
	<form action="atualizar_dados.php" method="post">
		<fieldset>
		<legend>Consultar Dados</legend>
		<table>
			<tr>
				<td>
				<?php
					
					// importa dados de conexão
					include_once('../conexao.php');
					
					$codigo = $_POST['nome'];
					
					$consulta = mysqli_query($conexao, "SELECT CPF as cpf, Nome_cliente as cliente, Nascimento as nascimento, Sexo as sexo, Email as email, Telefone as telefone FROM cliente 
                    WHERE '$codigo' = cpf 
                    ORDER BY Nome_cliente");
					


					while ($linha = mysqli_fetch_array($consulta)) {
                        echo "<label> CPF </label>";
                        echo "<input name='cpf' type='text' class='form-control' id='cpf' maxlength='14' autocomplete='off' value='" . htmlspecialchars($linha['cpf']) . "'>";

                        echo "<label> Nome </label>";
                        echo "<input name='cliente' type='text' class='form-control' id='cliente'  autocomplete='off' value='" . htmlspecialchars($linha['cliente']) . "'>";

                        echo "<label> Nascimento </label>";
                        echo "<input name='data_nascimento' type='date' class='form-control' id='date'  autocomplete='off' value='" . htmlspecialchars($linha['nascimento']) . "'>";

                        echo "<label> Sexo </label>";
                        echo "<input name='sexo' type='text' class='form-control' id='sexo' maxlength='1' autocomplete='off' value='" . htmlspecialchars($linha['sexo']) . "'>";

                        echo "<label> Email </label>";
                        echo "<input name='email' type='email' class='form-control' id='sexo'  autocomplete='off' value='" . htmlspecialchars($linha['email']) . "'>";

                        echo "<label> telefone </label>";
                        echo "<input name='telefone' type='tel' class='form-control' id='sexo' maxlength='16' autocomplete='off' value='" . htmlspecialchars($linha['telefone']) . "'>";
                    }
                                       
				?>
            
                <select name="escolha">
                    <option value="1">Editar</option>
                    <option value="2">Apagar</option>
                </select>
                
                <input type="submit" value="Enviar" class="consultar">
				</td>
                
			</tr>
            <tr></tr>
		</table>
		</fieldset>
		</form>
	
  </div>
  </body>
</html>