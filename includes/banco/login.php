<?php
	require 'conexao.php';
    require '../complementos/init.php';
	$usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : FALSE;
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
	$sql_select_login = "SELECT `usuario`, `senha` FROM `login` WHERE usuario = '$usuario' AND senha = '$senha'";
    $verificacao = mysqli_query($connect, $sql_select_login);
    if (!empty($_POST)) {
        if (mysqli_num_rows($verificacao) == 1) {
            echo "Login aprovado!!";
            $_SESSION['usuario'] = 'logado';
            header("location: ../../index.php");
            exit();
        } else {
            echo "Login inexistente!!";
        }
    }
    mysqli_close($connect);
?>