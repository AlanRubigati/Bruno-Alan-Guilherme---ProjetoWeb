	<?php
    session_start();
    session_destroy();
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Conectar</title>
		<link rel="stylesheet" type="text/css" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/styleConectar.css">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
	<div class="topo">
		
			<div class="topo-logo">
				<img src="./imagens/logoEduvale1.png" />
			</div>
		</div>
		<form class="formConectar col-11 col-sm-8 col-md-8 col-lg-6 col-xl-4" action="acoes/login.php" method="post">
			<section>
			  	<div class="form-group">
			    	<label for="labelRA">RA:</label>
			    	<input type="text" name="ralogin" class="form-control" placeholder="Digite seu RA" required>
			  	</div>
			  	<div class="form-group">
			  	  	<label for="labelSenha">Senha:</label>
			  	  	<input type="password" name="senhalogin" class="form-control"placeholder="Digite sua senha" required="">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Conectar</button>
			</section>
		</form>
		<div style="font-size: 20px">
			<center>
				<small>Não possui uma conta? Clique <a href="cadastrar_usuario_externo.php">aqui</a></small>
			</center>
		</div>
	</body>
</html>