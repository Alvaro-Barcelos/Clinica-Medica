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
                        <li><div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Cliente
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="../cadastrar/cadastrar.html">Cadastrar Cliente</a>
                              <a class="dropdown-item" href="../listarClientes/consultar_cliente.php">Alterar Dados</a>
                            </div>
                          </div></li>
                        <li><a href="../consultas/consulta.html">Consultas</a></li>
                    </ul>                    
                </nav>
                 
            </div>
        </section>
	
        <div class="cadastrar">
            <form action="dados_cliente.php" method="post">
                <fieldset>
                    <legend>Consultar Cliente</legend>
                    <table >
                        <tr>
                            <td><label>Nome</label></td>

                            <td>
                                <form action="">

                                </form>
                                <?php
                                    // importa dados de conexão
                                    include_once('../conexao.php');
                                    
                                    echo "<select name='nome'>";
                                    
                                    $consulta = mysqli_query($conexao, "SELECT CPF as cpf, Nome_cliente as cliente FROM cliente ORDER BY Nome_cliente");
                                    
                                    while ($resultado = mysqli_fetch_array($consulta)) {
                                        echo "<option value='" . $resultado['cpf'] . "'>" . $resultado['cliente'] . "</option>";
                                    }
                                    
                                    echo "</select>";
                                ?> 
                            </td>
                            
                            <td><input type="submit" value="Buscar" ></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
  </body>
</html>

