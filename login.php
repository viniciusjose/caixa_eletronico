<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
                        <input type="email" class="form-control input-icon" id="exampleInputEmail1" placeholder = "Digite seu e-mail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nós jamais iremos compartilhar seus dados com outras pessoas.</div>
                    </div>
                    <div class="mb-3 input-group">
                        
                        <span class="input-group-addon icon-senha"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control input-icon" id="exampleInputPassword1" placeholder = "Digite sua senha">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Manter-me conectado </label>
                    </div>
                    <p>Não é registado ? <a href="cadastrar.php">Crie uma conta</a></p>
                    <button type="submit" class="btn btn-primary btn-login">Login</button>
                </form>
            </div>
        </div>
        
                
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>