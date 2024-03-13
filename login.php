<!DOCTYPE html>
<?php
// REVISADO - OK

include_once("conexao.php");
?>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        +
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='home/home.html'", 0);
            }
            function failed(){
                setTimeout("window.location='index.html'", 0);
                window.alert("Usuario e senhas invalidos!!")
            }
        </script>
    </head>
    <body>
        <?php
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $consulta = mysqli_query($conexao,"SELECT * FROM funcionario WHERE login = '$login' AND senha = '$senha'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
                echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["login"]=$_POST["login"];
                $_SESSION["senha"]=$_POST["senha"];
                echo"<script language='javascript'>sucesso()</script>";
            }
        ?>
    </body> 
</html>