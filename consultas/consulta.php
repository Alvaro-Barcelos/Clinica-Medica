<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
            <link rel="stylesheet" href="style.css">
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
                        <li>Telefone</li>
                        <li>Mapa</li>
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
                        <li>Home</li>
                        <li>Sobre nos</li>
                        <li>Agendar</li>
                        <li>Consultar</li>
                    </ul>                    
                </nav>
            </div>
        </section>


            <?php

                include_once('conexao.php');


                $data = _POST['date'];

                $consulta = mysqli_query($conexao, "SELECT Consulta.Cod_consulta, Consulta.Data_consulta, Consulta.Horário, Consulta.Tipo_consulta, cliente.Nome_cliente FROM Consulta INNER JOIN cliente 
                ON consulta.cod_cliente = cliente.cod_cliente
                WHERE Data_consulta = '$data'");

                while ($linha = mysqli_fetch_array($consulta)) {

                    echo " <div class='cadastrar'>";
                    echo "<p>Codigo: " . $linha['Cod_consulta'] . "</p>";
                    echo "<p>Data da consulta: "  . $linha['Data_consulta'] . "</p>";
                    echo "<p>Horário: " . $linha['Horário'] . "</p>";
                    echo "<p>Tipo: "  . $linha['Tipo_consulta'] . "</p>";
                    echo "<p>Nome do cliente: "  . $linha['telefone'] . "</p>";
                    echo "</div>";
                }

            ?>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

      <script>
          $('#date').mask('00/00/0000');
          
      </script>
    </body>

</html>

