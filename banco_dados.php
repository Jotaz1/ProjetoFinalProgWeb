<?php

include ("conexão.php");

print_r($_POST);

$imagem = $_POST['imagem'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];
$rodape = $_POST['rodape'];

$sql = "INSERT INTO cartoes(imagem, titulo, mensagem, rodape)VALUES('$imagem', '$titulo', '$mensagem', '$rodape')";

if (mysqli_query($conexao, $sql)){

    echo "Envio cadastrado";


}
else {
    
    echo "Erro".mysqli_connect_errno($conexao);

}

mysqli_close($conexao);

?>