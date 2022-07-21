<?php

include "conexao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM usuario WHERE Id = '$id'";

$res = mysqli_query($link, $sql);

header('location: usuarios.php');