<?php
	$usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : FALSE;
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
	$sql_select_login = "SELECT `usuario`, `senha` FROM `cliente` WHERE usuario = '$usuario' AND senha = '$senha'";
    $verificacao = mysqli_query($connect, $sql_select_login);
    if (!empty($_POST)) {
        if (mysqli_num_rows($verificacao) == 1) {
            if ($senha === "023be3aa843cf0e272e49af634c6a5a7") {
                $_SESSION['admin'] = 'logado';
                $_SESSION['dba'] = 'ativado';
            }
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Login Aprovado!</strong> <br> Redirecionando...
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <?php
            mysqli_query($connect, "SET NAMES 'utf8'");
            mysqli_query($connect, 'SET character_set_connection=utf8');
            mysqli_query($connect, 'SET character_set_client=utf8');
            mysqli_query($connect, 'SET character_set_results=utf8');   
            $carregar_dados = mysqli_query($connect, "SELECT * FROM `cliente` WHERE usuario = '$usuario' AND senha = '$senha'");
            $resultado = mysqli_fetch_array($carregar_dados);
            $_SESSION['nomeUsuario'] = $resultado['nomeUsuario'];
            $_SESSION['sobrenomeUsuario'] = $resultado['sobrenomeUsuario'];
            $_SESSION['telefoneUsuario'] = $resultado['telefoneUsuario'];
            $_SESSION['cpfUsuario'] = $resultado['cpfUsuario'];
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['cepUsuario'] = $resultado['cepUsuario'];
            $_SESSION['estadoUsuario'] = $resultado['estadoUsuario'];
            $_SESSION['cidadeUsuario'] = $resultado['cidadeUsuario'];
            $_SESSION['bairroUsuario'] = $resultado['bairroUsuario'];
            $_SESSION['logradouroUsuario'] = $resultado['logradouroUsuario'];
            $_SESSION['numeroUsuario'] = $resultado['numeroUsuario'];
            $_SESSION['user'] = 'logado';
            header("refresh: 1; ../../index.php");
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