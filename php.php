<?php

    $mysqli = new mysqli("localhost", "root", "", "teste");

    if (mysqli_connect_errno()){

        printf("Conexão falhou: %\n", mysqli_connect_errno());


    }
    
    if($result = $mysqli->query("select id from cadastro")){

        printf($numeroImagem."imagem");

        $result->close();

    }

    $mysqli->close();


?>