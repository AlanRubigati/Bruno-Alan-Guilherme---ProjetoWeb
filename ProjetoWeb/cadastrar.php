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
		<title>Cadastrar</title>
		<link rel="stylesheet" type="text/css" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/styleCadastrar.css">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body style="overflow: auto;">
		<div class="topo">
			<div class="topo-menu">
				Icone Menu
			</div>
			<div class="topo-titulo">
				<ul class="nav nav-tabs" id="myTab" role="tablist" style="justify-content: center;">
				  <li class="nav-item">
				    <a class="nav-link" style="color: #fff" href="index.php">Conectar</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link active" href="cadastrar.php">Cadastrar</a>
				  </li>
				</ul>
			</div>
			<div class="topo-logo">
				<img src="./imagens/logoEduvale1.png" />
			</div>
		</div>
		<div>
			<form class="formCadastrar col-11 col-sm-11 col-md-11 col-lg-9 col-xl-7" action="_insert_usuario.php" method="post">
				<div class="campos form-row">
					<div class="form-group col-12 col-sm-12 col-md-6">
						<label>*Nome:</label>
						<input type="text" name="nomelogin" class="form-control" placeholder="Digite seu nome completo" required>
					</div>
					<div class="form-group col-12 col-sm-12 col-md-6">
						<label>*RA:</label>
						<input type="number" name="ra" class="form-control" placeholder="Digite seu RA" required>
					</div>
					<div class="form-group col-12 col-sm-12 col-md-6">
						<label>*Senha:</label>
						<input id="txtSenha" type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
					</div>
					<div class="form-group col-12 col-sm-12 col-md-6">
						<label>*Confirme sua senha:</label>
						<input type="password" class="form-control" placeholder="Confirme sua senha" required oninput="validaSenha(this)">
					</div>
					<div class="form-group col-12 col-sm-12 col-md-6" >
						<label>Nivel de acesso</label>
						<select name="nivel" class="form-control">
							
								<option value="1">Adminstrador</option>
								<option value="2">Aluno</option>
							
						</select>
					</div>
				</div>
				<div class="botoes">
				  	<button type="sumit" class="btn btn-warning" style="color: #fff; font-size: 20px;">Confirmar</button>
				</div>
			</form>
		</div>

		<script type="text/javascript">
			function validaSenha (input){
				if (input.value != document.getElementById('txtSenha').value) {
					input.setCustomValidity("Senha incorreta");
				}else {
					input.setCustomValidity('');
				}
			}
		</script>
	</body>
</html>