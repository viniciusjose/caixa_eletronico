<?php 

  session_start();
  require 'config.php';
  if(!isset($_SESSION['id_usuario']) && empty($_SESSION['id_usuario'])){
    header("Location: login.php");
    exit;
  }
  $usuario = "";
  $sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
  $sql = $database->prepare($sql);
  $sql->bindValue(":id", $_SESSION['id_usuario']);
  $sql->execute();
  if($sql->rowCount() > 0){
    $usuario = $sql->fetch();
  }else{
    header("Location login.php");
    exit;
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/fav-icon.jpg" />
    <title>Santander - Página Inicial</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-customize">
      <a class="navbar-brand" href="#">
        <img src="img/logo-santander.png" width="200" class="d-inline-block align-top" alt="">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
      </div>
      <ul class="navbar-nav user-dropdown">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user icon-usuario"></i><?php echo $usuario['nome']?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="alterar.php">Alterar informações</a>
            <a class="dropdown-item" href="sair.php">Logout</a>
          </div>
        </li>
      </ul>
        
    </nav>    

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>