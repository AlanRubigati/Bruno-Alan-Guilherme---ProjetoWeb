
<!--
	include 'conexao.php';
	include 'script/password.php';

	$ralogin = $_POST ['ralogin'];
	$senhalogin = $_POST ['senhalogin'];

	$sql = "SELECT rauser, senhauser FROM usuarios WHERE rauser = '$ralogin'";
	$buscar = mysqli_query($conexao, $sql);
	echo $total = mysqli_num_rows($buscar);

	
	

	while($array = mysqli_fetch_array($buscar)) {
		# code...

		$senha = $array['senhauser'];

		$senhadecodificada = sha1($senhalogin);

		if ($total > 0 && $nvusu == 0) {
		# code...

			if ($senhadecodificada == $senha) {
				header('Location: menu.php');
				# code...
			}else {
				header('Location: erro.php');	
			}

		}else if ($total > 0 && $nvusu == 1 ) {

			if ($senhadecodificada == $senha) {
				header('Location: kk');
				# code...
			}else {
				header('Location: erro.php');	
			}

		}else {

			header('Location: erro.php');

		}
	}


-->