<?php

    $host= "localhost";
    $user = "root";
    $pass= "";
    $dbname = "agendamentos";

    try{
        $conn = mysqli_connect("localhost", "root", "", "agendamentos");
        //echo "conexão realizada com sucesso";
    } catch(PDOException $err){
        die("Erro: conexão com banco de dados não pode ser realizada com sucesso. Erro gerado" . $err->getMessage());
    }


?>