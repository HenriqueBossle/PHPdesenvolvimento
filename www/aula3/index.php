<?php

require_once("Connection.php");


$cliente = new Cliente("Nome", "email");
$cliente->setNome($_POST["nome"])
    ->setNome($_POST["email"]);

echo "<pre>";
var_dump($cliente);
salvarCliente($cliente);

