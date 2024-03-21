<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
            <link rel="stylesheet" href="consulta.css">
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
                        <li><a href="../home/home.html">Home</a></li>
                        <li><a href="../home/home.html">Sobre nos</a></li>
                        <li><a href="../agendar/agen_m.php">Agendar</a></li>
                        <li><a href="../cadastrar/cadastrar.html">Cadastrar</a></li>
                        <li><a href="../consultas/consulta.html">Consultas</a></li>
                    </ul>                    
                </nav>
            </div>
        </section>

        <div class='cadastrar'>
            <table>

        

            <tr>
                <th>Data da consulta</th>
                <th>Horário</th>
                <th>Medico</th>
                <th>Tipo</th>
                <th>Nome do cliente</th>
            </tr>
            <?php
                include_once('../conexao.php');

                if(isset($_POST['date'])) {
                    $data = $_POST['date'];

                    $consulta = mysqli_query($conexao, "SELECT consulta.Data_consulta, consulta.Horario, medico.Nome_medico as medico, medico.especialidade ,cliente.Nome_cliente 
                    FROM Consulta 
                    INNER JOIN cliente 
                    ON consulta.CPF_cliente = cliente.CPF 
                    INNER JOIN Medico 
                    ON consulta.Cpf_Medico = medico.Cpf_Medico
                    WHERE Data_consulta = '$data'");

                    echo "<tr>";
                    echo "<th>Data da consulta</th>";
                    echo "<th>Horário</th>";
                    echo "<th>Medico</th>";
                    echo "<th>Tipo</th>";
                    echo "<th>Nome do cliente</th>";
                    echo "</tr>";

                    if(mysqli_num_rows($consulta) > 0) {
                        while ($linha = mysqli_fetch_array($consulta)) {
       
                                    

                                    echo "<tr>";
                                        echo "<td> " . $linha['Data_consulta'] . "</td>";
                                        echo "<td> " . $linha['Horario'] . "</td>";
                                        echo "<td> " . $linha['medico'] . "</td>";
                                        echo "<td> " . $linha['especialidade'] . "</td>";
                                        echo "<td> " . $linha['Nome_cliente'] . "</td>";
                                    echo "</tr>";
                                
                            

                        }
                    } else {
                        echo "<div class='aviso'>";
                        echo "<p>Nenhum resultado encontrado para a data especificada.</p>"; 
                        echo "</div>";

                    }
                }
            ?>
            </table>
            </div>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

      <script>
          $('#date').mask('00/00/0000');
          
      </script>
    </body>

</html>

