<!DOCTYPE html>
<?php
// REVISADO - OK

include_once("conexao.php");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        
    </head>
    <body>
        <?php
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $consulta = mysqli_query($conexao,"SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
                echo"<br><br><br><br><br><br><p align = 'center'>Por favor aguarde&hellip;</p>";
                echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["login"]=$_POST["login"];
                $_SESSION["senha"]=$_POST["senha"];
                echo" <br><br><br><br><br><br> <p align = 'center'>Por favor aguarde&hellip;</p>";
                echo"<script language='javascript'>sucesso()</script>";
            }
        ?>
    </body> 
</html>