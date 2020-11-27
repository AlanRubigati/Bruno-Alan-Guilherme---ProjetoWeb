<?php
    session_start();

    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
		require("acoes/conexao.php");
		
		
        $adm  = $_SESSION["usuario"][1];
		$nome = $_SESSION["usuario"][0];

    }else{
        echo "<script>window.location = 'index.php'</script>";
	}
	
	if($adm != 1){
	session_start();
    session_destroy();

    echo "<script>window.location = 'index.php'</script>";		
	}

	

?>

<?php if($adm): ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema para Ambiente Virtual de Monitoria</title>
		<link rel="stylesheet" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/boostrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/styleConectar.css">
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="./css/jquery.dataTables.min.css">
		<script src="./js/jquery-3.5.1.js"></script>
		<script src="./js/jquery.dataTables.min.js"></script>

		<script type="text/javascript" language="javascript">

			


			$(document).ready(function() {
   			 	$('#listarMonitores').DataTable({

					"processing": true,
        			"serverSide": true,
        			"ajax": {
            					"url": "buscarMonitores.php",
            					"type": "POST"
        					}
						
					});
			} );



			function show_item(user_id) {


			var dados = '{"' + user_id + '"}'

			jQuery.ajax({
					type: "POST",
					url: "acoes/aprova_monitor.php",
					data: "dados=" + dados
				});
		};


		</script>
		
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>

	<div class="topo" style="margin-bottom: 25px;">
		
		<div class="topo-logo">
			<img src="./imagens/logoEduvale1.png" />
		</div>

	</div>


	<div class="col-sm-12">	
	<div class="card" style="col-sm-12";>
  	<div class="card-header">
    Monitores
  	</div>
	<div class="card-body">
    <blockquote class="blockquote mb-0">
		


	<table id="listarMonitores" class="display" style="width:100%">

	<thead>
            <tr>
				<th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Materia</th>
                <th>Termo</th>
				<th>Ações</th>
            </tr>
        </thead>

	</table>
	</div>
	</div>
</div>	
	</body>
</html>
<?php endif; ?>

