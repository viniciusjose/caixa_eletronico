<?php 
    session_start();
    require 'config.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <title>Santander - Login</title>
    <link rel="shortcut icon" href="img/fav-icon.jpg" />
  </head>
  <body>
        <div class="container box-form">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <figure class="figure">
                            <img src="img/logo-santander.png" class="figure-img img-fluid rounded logo-principal" alt="...">
                        </figure>
                    </div>
                </div>     
            </div>
            <div class="container form-login">
                <form method="POST"> 
                    <div class="mb-3 input-group">
                        <span class="input-group-addon icon-login"><i class="fas fa-envelope"></i></span>
                        <input type="email" name= "email" required class="form-control input-icon" id="exampleInputEmail1" placeholder = "Digite seu e-mail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 input-group">
                        
                        <span class="input-group-addon icon-senha"><i class="fas fa-lock"></i></span>
                        <input type="password" name= "senha" required class="form-control input-icon" id="exampleInputPassword1" placeholder = "Digite sua senha">
                        <div id="emailHelp" class="form-text">Todos os seus dados estarão armazenados em segurança conosco.</div>
                    </div>
                    <?php
                        $usuario = "";
                        if((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['senha']) && !empty($_POST['senha']))){
                            $email = addslashes($_POST['email']);
                            $senha = md5(addslashes($_POST['senha']));
                    
                            $sql = "SELECT email, senha, id_usuario FROM usuarios WHERE email = :email AND senha = :senha";
                            $sql = $database->prepare($sql);
                            $sql->bindValue(":email", $email);
                            $sql->bindValue(":senha", $senha);
                            $sql->execute();
                            if($sql->rowCount() > 0){
                                $usuario = $sql->fetch();
                                if(isset($_POST['manter_login']) && !empty($_POST['manter_login'])){
                                    $_SESSION['id_usuario'] = $usuario['id_usuario'];
                                }
                                header("Location: index.php");
                                exit;
                            }else{
                                
                                echo "<p class = 'invalid-user'>Usuário e senha inválidos</p>";
                            }
                        }
                    ?>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name= "manter_login"class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Manter-me conectado </label>
                    </div>
                    <p>Não é registado ? <a href="cadastrar.php">Crie uma conta</a></p>
                    <button type="submit" class="btn btn-primary btn-login">Login</button>
                    
                </form>
            </div>
        </div>
        
                
         
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>