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
		<link rel="stylesheet" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" href="./css/style.css">
		
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>

		<div class="inicio">
			<div class="inicio-superior">
			<div style= "position: absolute; height: 30px; width: 60px; top: 0; right: 0; background-color: white;">
				<a href="acoes/logout.php"><h4>SAIR</h4></a>
				</div>
				<div>
					<span>Seja Bem Vindo<br /> ao sistema de monitoria<br /> da Eduvale Avaré</span>
				</div>
				<div>
					<img src="./imagens/logoEduvale1.png"/ style="height: 150px;">
				</div>
				
			</div>
			<div class="inicio-inferior">
				<div>
					<a class="btn" style="color: #fff; font-size: 30px; background-color: rgba(0,51,101, 1)" href="facaParteDaMonitoria.php" role="button">Faça parte da monitoria</a>
				</div>
				<?php if($adm): ?>
					<div>
					<a class="btn" style="color: #fff; font-size: 30px; background-color: rgba(0,51,101, 1)" href="facaParteDaMonitoria.php" role="button">Aprovar monitores</a>
				</div>
				<?php endif; ?>
				<div>
					<a class="btn btn-warning" style="color: #fff; font-size: 30px;" href="SistemaDeMentoria.php" role="button">Consultar os monitores</a>
				</div>
			</div>
		</div>
	</body>
</html>