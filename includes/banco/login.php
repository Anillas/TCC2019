<?php
	require 'conexao.php';
	$usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : FALSE;
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

	$sql_select_login = "SELECT usuario, senha
	FROM login 
	WHERE usuario = "" . $usuario . """; 
	$verificar_usuario = @mysql_query($SQL) or die("Erro no banco de dados!"); 
	$verificacao = @mysql_num_rows($verificar_usuario); 
 
// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if($verificacao) 
{ 
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
    $dados_usuario = @mysql_fetch_array($verificar_usuario); 
 
    // Agora verifica a senha 
    if(!strcmp($senha, $dados_usuario["senha"])) 
    { 
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
        header("Location: index.php"); 
        exit; 
    } 
    // Senha inválida 
    else
    { 
     "Senha inválida!"; 
    exit; 
    } 
} 
    // Login inválido 
else
{ 
    echo "O login fornecido por você é inexistente!"; 
    exit; 
}
?>