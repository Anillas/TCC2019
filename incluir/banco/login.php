<?php
	$usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : FALSE;
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
	$sql_select_login = "SELECT `usuario`, `senha` FROM `login` WHERE usuario = '$usuario' AND senha = '$senha'";
    $verificacao = mysqli_query($connect, $sql_select_login);
    if (!empty($_POST)) {
        if (mysqli_num_rows($verificacao) == 1) {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login Aprovado!</strong> <br> Redirecionando...
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <?php
            $_SESSION['usuario'] = 'logado';
            header("refresh: 3; ../../index.php");
            exit();
        } else {
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Inexistente!</strong> <br> Verifique o usuário e senha.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <?php 
        }
    }
    mysqli_close($connect);
?>