<?php

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

include ("conexão.php");

print_r($_POST);

$imagem = $_POST['imagem'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];
$rodape = $_POST['rodape'];

$sql = "INSERT INTO cartoes(imagem, titulo, mensagem, rodape)VALUES('$imagem', '$titulo', '$mensagem', '$rodape')";

if (mysqli_query($conexao, $sql)){

    echo "Envio cadastrado";

    phpAlert(   "Cartão cadastrado com sucesso!!!"   );

}
else {
    
    echo "Erro".mysqli_connect_errno($conexao);

}

mysqli_close($conexao);

?>