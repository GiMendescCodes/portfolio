<?php 

//Inicia uma nova sessão ou retoma uma sessão existente.
@session_start();

//Inclusão do Arquivo de Conexão.
require_once("conexao.php");

//Obtenção dos Dados do Formulário.
$email = $_POST['email'];
$senha = $_POST['senha'];

//Verificação das Credenciais.
if($email == $email_sistema and $senha == $senha_sistema){
	$_SESSION['nome'] = $nome_sistema;
	echo '<script>window.location="painel"</script>';
}else{
	echo '<script>alert("Dados Incorretos")</script>';
	echo '<script>window.location="index.php"</script>';
}

?>