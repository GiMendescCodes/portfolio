<?php 
@session_start();
require_once('../conexao.php');
if(@$_SESSION['nome'] == ""){	 
	echo '<script>window.location="../index.php"</script>';
	exit();
}

require_once("cabecalho.php");
?>



<div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nome Site</label>
			<input name="nome" type="text" class="form-control" placeholder="Nome do Site" value="<?php echo $nome_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Email Site</label>
			<input name="email" type="email" class="form-control" placeholder="Email do Site" value="<?php echo $email_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-2 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Senha Site</label>
			<input name="senha" type="password" class="form-control" placeholder="Senha do Site" value="<?php echo $senha_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-2 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Telefone Site</label>
			<input name="telefone" id="telefone" type="text" class="form-control" placeholder="Telefone do Site" value="<?php echo $telefone_sistema ?>">
		</div>
	</div>

	<div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Endereço</label>
			<input name="endereco" type="text" class="form-control" placeholder="Endereço" value="<?php echo $endereco_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Instagram</label>
			<input name="email" type="text" class="form-control" placeholder="instagram" value="<?php echo $instagram_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Twitter</label>
			<input name="twitter" type="text" class="form-control" placeholder="twitter" value="<?php echo $twitter_sistema ?>" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3 col-6"">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Facebook</label>
			<input name="facebook" type="text" class="form-control" placeholder="facebook" value="<?php echo $facebook_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-3 col-6"">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Linkedin</label>
			<input name="linkedin" type="text" class="form-control" placeholder="linkedin" value="<?php echo $linkedin_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-3 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Youtube</label>
			<input name="youtube" type="text" class="form-control" placeholder="youtube" value="<?php echo $youtube_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-3 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Cor template hexadecimal</label>
			<input name="cor" type="text" class="form-control" placeholder="cor" value="<?php echo$cor_sistema ?>">
		</div>
	</div>

	<div class="col-md-12 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Texto rodapé site</label>
			<input name="texto_rodape" type="text" class="form-control" placeholder="texto rodapé" value="<?php echo $texto_rodape ?>">
		</div>
		<div class="row">
		<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Título contato</label>
			<input name="titulo_contato" type="text" class="form-control" placeholder="Título contato" value="<?php echo $titulo_contato ?>" required>
		</div>
	</div>
	<div class="col-md-8 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Subtitulo Contato</label>
			<input name="texto_rodape" type="text" class="form-control" placeholder="subtitulo contyo" value="<?php echo $subtitulo_contato ?>">
		</div>
	</div>
	<div class="row">
	<div class="col-md-3 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">logo(*png)</label>
			<input name="logo" type="file" class="form-control" placeholder="logo" value="<?php echo $logo ?>">
		</div>
	</div>
	<div class="col-md-3 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">icone(*png)</label>
			<input name="icone" type="file" class="form-control" placeholder="icone" value="<?php echo $logo ?>">
		</div>
	</div>
	</div>