<?php

$server = "localhost";
$user = 'root';
$senha = 'sua-senha';
$bd_name = 'projetologin';

$link = mysqli_connect($server, $user, $senha, $bd_name);

if(mysqli_connect_error()){
    echo "Erro na conexao";
    mysqli_connect_error();
}