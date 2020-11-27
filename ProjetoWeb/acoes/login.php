<?php
    require("conexao.php");

    $senhalogin = $_POST ['senhalogin'];
    $senhadecodificada = sha1($senhalogin);

    

    if(isset($_POST["ralogin"]) && isset($senhadecodificada) && $conexao != null){
        
        $query = $conexao->prepare("SELECT * FROM usuarios WHERE rauser = ? AND senhauser = ?");
        $query->execute(array($_POST["ralogin"], $senhadecodificada));
        
        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];   
           session_start();

         $_SESSION["usuario"] = array($user["nomeuser"], $user["niveluser"], $user["rauser"]);

            if($user["niveluser"] == 1){
            echo "<script>window.location = '../menu_adm.php'</script>";
            } else{
            echo "<script>window.location = '../Menu.php'</script>";
            }

        }else{
            echo "<script>window.location = '../'</script>";
        }
    }else{
       echo "<script>window.location = '../'</script>";
    }
?>