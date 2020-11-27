<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        require("acoes/conexao.php");

        $adm  = $_SESSION["usuario"][1];
		$nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.php'</script>";
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema para Ambiente Virtual de Monitoria</title>
		<link rel="stylesheet" type="text/css" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/sistemaDeMentoria.css">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<div class="topo" style= "margin-bottom: 20px;">
		
			<div class="topo-menu" >
				
				<a class="btn" style="color: #fff; font-size: 20px; background-color: rgba(0,51,101, 1)" href="Menu.php" role="button">Voltar</a>
			
			</div>
			<div class="topo-titulo">
				Sistema de Mentoria
			</div>
			<div class="topo-logo">
				<img src="./imagens/logoEduvale1.png" />
			</div>
		</div>




	<div class="col-sm-12">		
	<div class="card">
	<div class="card-header">
	<strong class="card-title">PUBLICAÇÕES</strong>
	</div>
	<div class="card-body">
			<div class="conteudoDireito">
				<div class="conteudoDireito-publicacoes">
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Aluno</th>
								<th scope="col">Curso</th>
								<th scope="col">Materia</th>
								<th scope="col">Data</th>
								<th scope="col">Horário</th>
								<th scope="col">Sala</th>
							</tr>
						</thead>

						<?php
							include 'conexao.php';
							$sql = "SELECT * FROM `monitor`";
							$busca = mysqli_query($conexao, $sql);

							while ($array = mysqli_fetch_array($busca)) {
								$nome = $array ['nome'];
								$curso = $array ['curso'];
								$termo = $array ['termo'];
								$materia = $array ['materia'];
								$data = $array ['data'];
								$hora = $array ['hora'];
								$sala = $array ['sala'];
								$id = $array ['id'];
							?>
							<tr>
								<td><?php echo $nome ?></td>
								<td><?php echo $curso ?></td>
								<td><?php echo $materia ?></td>
								<td><?php echo $data ?></td>
								<td><?php echo $hora ?></td>
								<td><a href="https://meet.google.com/dkm-brgt-rem"/><?php echo $sala ?></td>
							</tr>

						<?php } ?>
					</table>
				</div>
			</div>
			</div>
		</div>
		</div>
		</div>
	</body>
</html>