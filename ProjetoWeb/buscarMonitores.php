<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetoweb";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$requestData = $_REQUEST;

        $requestData = $_REQUEST;

        $columns = array(
           0 => 'id_usur',
            1 => 'nomeuser',
            2 => 'curso_usu',
            3 => 'materia_user',
            4 => 'termo_user'

        );

        $result_user = "SELECT id_usur, nomeuser, curso_usu, materia_user, termo_user FROM usuarios";
        $resultado_user = mysqli_query($conn, $result_user);
        $qnt_linhas = mysqli_num_rows($resultado_user);
    

        $result_moni = "SELECT id_usur, nomeuser, curso_usu, materia_user, termo_user FROM usuarios WHERE 1=1";
        if( !empty($requestData['search']['value']) ) {   
            $result_moni.=" AND ( id_usur LIKE '".$requestData['search']['value']."%' ";    
            $result_moni.=" OR nomeuser LIKE '".$requestData['search']['value']."%' ";
            $result_moni.=" OR curso_usu LIKE '".$requestData['search']['value']."%' ";
            $result_moni.=" OR materia_user LIKE '".$requestData['search']['value']."%' ";
            $result_moni.=" OR termo_user LIKE '".$requestData['search']['value']."%' )";
        }
        
        $result_monitor=mysqli_query($conn, $result_moni);
        $totalFiltered = mysqli_num_rows($result_monitor);
        

        $result_moni.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
       
        $result_monitor=mysqli_query($conn, $result_moni);


        $dados = array();
        while( $row_usuarios =mysqli_fetch_array($result_monitor) ) {  
            $dado = array(); 
            $dado[] = $row_usuarios["id_usur"];
            $dado[] = $row_usuarios["nomeuser"];
            $dado[] = $row_usuarios["curso_usu"];	
            $dado[] = $row_usuarios["materia_user"];
            $dado[] = $row_usuarios["termo_user"];
            $dado[] = "<form method=POST action=acoes/aprova_monitor.php>
                        <button type=\"submit\" class=\"btn btn-success\" onclick=\"show_item(" . $row_usuarios["id_usur"] . ")\" >Aceitar</button>
                       <button type=\"button\" class=\"btn btn-danger\">Recusar</button>
                       </form>";
                        
                       
            
            $dados[] = $dado;
        }


        $json_data = array(
            "draw" => intval( $requestData['draw'] ),
            "recordsTotal" => intval( $qnt_linhas ), 
            "recordsFiltered" => intval( $totalFiltered ), 
            "data" => $dados 
        );


echo json_encode($json_data); 
