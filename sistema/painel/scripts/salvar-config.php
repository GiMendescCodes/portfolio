<?php
require_once("../../conexao.php");
$nome_sistema = $_POST['nome'];
$telefone_sistema = $_POST['telefone'];
$email_sistema = $_POST['email'];
$senha_sistema = $_POST['senha'];
$endereco_sistema = $_POST['endereco'];
$facebook_sistema = $_POST['facebook'];
$instagram_sistema = $_POST['instagram'];
$linkedin_sistema = $_POST['linkedin'];
$youtube_sistema = $_POST['youtube'];
$twitter_sistema = $_POST['twitter'];
$cor_sistema = $_POST['cor'];
$titulo_equipe = $_POST['titulo_contato'];
$subtitulo_equipe = $_POST['subtitulo_contato'];
$texto_rodape = $_POST['texto_rodape'];

//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = 'logo.png';
$caminho = '../../img/' . $nome_img;

$imagem_temp = @$_FILES['logo']['tmp_name'];

if (@$_FILES['logo']['name'] != "") {
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);
	if ($ext == 'png') {
		move_uploaded_file($imagem_temp, $caminho);
	} else {
		echo 'Extensão de Imagem não permitida, insira apenas imagem png!';
		exit();
	}
}


//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = 'icone.png';
$caminho = '../../imgs/' . $nome_img;

$imagem_temp = @$_FILES['icone']['tmp_name'];

if (@$_FILES['icone']['name'] != "") {
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);
	if ($ext == 'png') {
		move_uploaded_file($imagem_temp, $caminho);
	} else {
		echo 'Extensão de Imagem não permitida, insira apenas imagem png!';
		exit();
	}
}

$pdo->query("UPDATE config SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha_sistema', 
telefone = '$telefone_sistema', endereco = '$endereco_sistema', facebook = '$facebook_sistema', twitter = '$twitter_sistema', 
linkedin = '$linkedin_sistema', youtube = '$youtube_sistema', instagram = '$instagram_sistema', cor = '$cor_sistema', 
titulo_contato = '$titulo_contato', subtitulo_contato = '$subtitulo_contato', texto_rodape = '$texto_rodape' ");

echo 'Salvo com Sucesso';

?>