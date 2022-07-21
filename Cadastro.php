<?php
    include_once "conexao.php";

if(isset($_POST['enviar'])):    

$nome = mysqli_escape_string($link,$_POST['nome']);
$sobrenome = mysqli_escape_string($link,$_POST['sobrenome']);
$telefone = mysqli_escape_string($link,$_POST['telefone']);
$email = mysqli_escape_string($link,$_POST['email']);
$senha = mysqli_escape_string($link,$_POST['senha']);

    $sql = "INSERT INTO usuario VALUES (null,'$nome','$sobrenome',$telefone,'$email','$senha')";

    $res= mysqli_query($link, $sql);

    header('Location: usuarios.php');
    
endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <main class="container w-25 mt-3 border border-dark p-3">
        <h1 class="display-6">Cadastrar usuario:</h1>
        <form action="index.php" method="POST">
            <div class="  form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="nome...">
              <label for="floatingInput">Insira seu nome</label>
            </div>
            
            <div  class="  form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Sobrenome...">
                <label for="floatingInput">Insira seu sobrenome</label>
            </div>

            <div  class="  form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Telefone...">
                <label for="floatingInput">Insira seu Telefone</label>
            </div>

            <div  class="  form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Email@gmail.com...">
                <label for="floatingInput">Insira seu email</label>
            </div>

            <div class="  form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
              <label for="floatingPassword">Senha</label>
            </div>

            <div><button type="submit" name="enviar" class="btn btn-dark mt-2">Enviar</button></div>
        </form>
    </main>

    
</body>
</html>