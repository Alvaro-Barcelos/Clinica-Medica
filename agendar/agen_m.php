<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
            <link rel="stylesheet" href="agendar.css">
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
                    <li>Telefone</li>
                    <li>Mapa</li>
                </ul>
            </nav>
        </div>
        </header>
        <section>
            <div>
                <img src="../imagens/logo.png" alt="" height="60px" width="50px">
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
    
    <div class="agendar">
        <h2>Agendar Consulta</h2>
        <form class="questions" action="agendar.php" method="post" >

            
            <div class="mb-3">
              <input type="date" class="form-control" id="dateConsulta" aria-describedby="emailHelp" placeholder="Data da Consulta" name="dateConsulta">
            </div>
    
            <div class="mb-3">
                <input type="time" class="form-control" id="horaConsulta" aria-describedby="emailHelp" placeholder="Horário da Consulta" name="horaConsulta">
            </div>

            <select class="form-select" aria-label="Default select example" name="medicoCpf">
            <?php
              include_once('../conexao.php');

              $consultaMedicos = mysqli_query($conexao, "SELECT Cpf_Medico, Nome_medico, Especialidade FROM Medico");

              if (mysqli_num_rows($consultaMedicos) > 0) {
                  while ($linhaMedico = mysqli_fetch_array($consultaMedicos)) {
                      echo '<option value="' . $linhaMedico['Cpf_Medico'] . '">' . $linhaMedico['Nome_medico'] . ' - ' . $linhaMedico['Especialidade'] . '</option>';
                  }
              } else {
                  echo '<option value="">Nenhum médico disponível</option>';
              }
              ?>
            </select>

            <div class="mb-3">
                <input name="cpf" type="text" class="form-control" placeholder="CPF"  id="cpf" maxlength="14" autocomplete="off">
            </div>

            <button type="submit" id="botao" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

  <script>
      $('#horaConsulta').mask('00:00');
      $('#cpf').mask('000.000.000-00', {reverse: true});
  </script>

</body>
</html>