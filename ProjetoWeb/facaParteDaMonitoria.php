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
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/styleFacaParteDaMonitoria.css">
		<title>Faça parte da monitoria</title>
	</head>
	<body>
		<div class="conteudo">
			<div class="inicio-superior">
				<div>
					<span><h5>Seja Bem Vindo ao sistema de monitoria da Eduvale Avaré</h5></span>
				</div>
				<div>
					<img src="./imagens/logoEduvale1.png" style="height: 80px;" />
				</div>
			</div>
			<form action="inserir_monitor.php" method="post" class="form">
				<div style="font-size: 19px; font-weight: bold; margin-bottom: 25px; margin-top: 20px;">Preencha os dados para fazer parte da monitoria</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Nome</span>
					<input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" value="<?php echo $nome;?>" required/>
				</div>
				<div class="input-group-prepend campo">
    				<span class="input-group-text">Curso</span>
    				<select class="form-control" name="curso_usu">
      					<option>ADMINISTRAÇÃO</option>
      					<option>AGRONOMIA</option>
      					<option>ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
      					<option>ARQUITETURA E URBANISMO</option>
      					<option>CIÊNCIAS BIOLOGICAS</option>
      					<option>DIREITO</option>
      					<option>ENFERMAGEM</option>
      					<option>ENGENHARIA CIVIL</option>
      					<option>FISIOTERAPIA</option>
      					<option>JORNALISMO</option>
      					<option>MEDICINA VETERINÁRIA</option>
      					<option>NUTRIÇÃO</option>
      					<option>PSICOLOGIA</option>
      					<option>PUBLICIDADE E PROPAGANDA</option>
      					<option>ZOOTECNIA</option>
      				</select>
  				</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Termo</span>
					 	<select class="form-control" name="termo_user">
      						<option>1</option>
      						<option>2</option>
      						<option>3</option>
      						<option>4</option>
      						<option>5</option>
      						<option>6</option>
      						<option>7</option>
      						<option>8</option>
      						<option>9</option>
      						<option>10</option>
      					</select>
				</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Matéria</span>
					<input type="text" name="materia_user" placeholder="Digite a Matéria" class="form-control" required/>
				</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Telefone</span>
					<input type="number" name="telefone_user" placeholder="Digite seu telefone" class="form-control" required/>
				</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Data</span>
					<input type="date" name="data_moni" class="form-control" required/>
				</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Hora</span>
					<input type="time" name="hora_moni" class="form-control" required/>
				</div>
				<div class="input-group-prepend campo">
				  	<span class="input-group-text">Sala</span>
					<input type="text" name="sala_user" value="Videoconferencia" class="form-control" required/>
				</div>
				<div>
					<button type="sumit" class="btn btn-warning" style="color: #fff; font-size: 20px;">Confirmar</button>
					<a class="btn" style="color: #fff; font-size: 20px; background-color: rgba(0,51,101, 1)" href="Menu.php" role="button">Voltar</a>
				</div>
			</form>
		</div>
	</body>
</html>