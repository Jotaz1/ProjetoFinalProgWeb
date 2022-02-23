<?php

//------------- conexão banco ----------------//

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbName = "cartaonatal";


$conexao = mysqli_connect($servidor, $usuario, $senha, $dbName);

if (!$conexao){

     echo "Falha ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_errno;

}

else {
    
    echo "Conectado";
}

//------------- conexão banco ----------------//



?>


