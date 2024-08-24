<?php

require_once("Cliente.php");

function criaConexaoComBanco(){



    $host = "mysql";
    $user = "root";
    $pass = "1q2w3e4r5t"; //nao tem senha no xampp
    $db = "db";
    $port = "3306";

    $mysqli = new mysqli($host,$user,$pass,$db,$port);

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Falha: " . $mysqli -> connect_error;
        exit();
  }
  return $mysqli;

}
function salvarCliente(Cliente $cliente){
    $sql = "INSERT into clientes (nome, email) values ('{$cliente->getNome()}', '{$cliente->getEmail()}')";
    
    $conn = criaConexaoComBanco();
    if($conn->query($sql) === TRUE){
        echo "Registro salvo com sucesso";
    }else{
        echo "Erro ao salvar no banco de dados";
    }

}