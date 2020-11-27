<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");
		$ra = $_SESSION["usuario"][2];
        $adm  = $_SESSION["usuario"][1];
		$nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.php'</script>";
    }
?>
<?php 

	include 'conexao.php';

	$curso = $_POST ['curso_usu']; 
	$materia = $_POST ['materia_user'];
	$termo = $_POST ['termo_user'];
	$data = $_POST ['data_moni'];
	$hora = $_POST ['hora_moni'];
	$sala = $_POST ['sala_user'];
	$telefone = $_POST ['telefone_user'];
	

	$sql = "UPDATE usuarios SET curso_usu='$curso', materia_user='$materia', termo_user='$termo', data_moni='$data', hora_moni='$hora', sala_user='$sala', telefone_user='$telefone' WHERE rauser=$ra";

	$inserir = mysqli_query($conexao, $sql);

 ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <div>
 	<center>
 		<h4>Monitor Cadastrado com Sucesso</h4>
 	</center>
 	<div style="padding-top: 20px">
 		<center>
 			<a href="facaParteDaMonitoria.php" role="button" class="btn btn-primary">Cadastrar um novo monitor</a>
 		</center>
 	</div>
 </div>

