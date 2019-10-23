<?php
	require 'conexao.php';
	$usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : FALSE;
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
	$sql_select_login = "SELECT `usuario`, `senha` FROM `login` WHERE usuario = '$usuario' AND senha = '$senha'";
    $login = False;
    $verificacao = mysqli_query($connect, $sql_select_login);
    if (!empty($_POST)) {
        if (mysqli_num_rows($verificacao) == 1) {
            echo "Login aprovado!!";
            $login = True;
            header("location: ../../index.php");
            exit();
        } else {
            echo "Login inexistente!!";
        }
    }
    mysqli_close($connect);
?>