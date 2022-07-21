<?php

 include_once "conexao.php";

  if(isset($_POST['sair'])){
    mysqli_close($link);
    header('Location: index.php');
  }
  
   $sql = "SELECT * FROM usuario";        

            $res = mysqli_query($link, $sql);

            
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<h1 class="display-1">Usuarios Cadastrados</h1>

<div class="container">
    <table border="3" class="table">
      <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Senha</th>
          <th scope="col">Edição</th>
        </tr>
      </thead>
      <tbody>
        <?php
            while ($dado = mysqli_fetch_row($res)):
        ?>
        <tr>
          <th scope="row"><?php echo $dado[0] ?></th>
          <td><?php echo $dado[1]; ?></td>
          <td><?php echo $dado[2]; ?></td>
          <td><?php echo $dado[3]; ?></td>
          <td><?php echo $dado[4]; ?></td>
          <td><?php echo $dado[5]; ?></td>
          <td>
            

            <?php echo "<a class='btn btn-danger' href=delete.php?id=". $dado[0].">Apagar</a>";?>

            <?php echo "<a class='btn btn-success' href=editar.php?id=". $dado[0].">Editar</a>";?>
        </td>
        </tr>
        <?php endwhile; 

  ?>
      </tbody>
    </table>
    
    <p>
      <form action="usuarios.php" method="POST">
        <button class="btn btn-dark  type="submit" name="sair">Sair</button>

       <a class="btn btn-dark" href="Cadastro.php">Cadastrar um novo usuario</a>
      </form>
    </p>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>