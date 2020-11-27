<?php
	include 'conexao.php';

	$nomelogin = $_POST ['nomelogin'];
	$ra = $_POST ['ra'];
	$senha = $_POST ['senha'];
	$nivel = $_POST ['nivel'];
	$status = 'Ativo';

	$sql = "INSERT INTO `usuarios`(`nomeuser`, `rauser`, `senhauser`, `niveluser`, `status`) VALUES ('$nomelogin', $ra, sha1('$senha'), $nivel, '$status')";

	$inserir = mysqli_query($conexao, $sql);

?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <div>
 	<center>
 		<h4>Cadastrado com sucesso</h4>
 	</center>
 	<div style="padding-top: 20px">
 		<center>
 			<a href="cadastrar_usuario_externo.php" role="button" class="btn btn-primary">Novo Cadastro</a>
 		</center>
 	</div>
 </div>