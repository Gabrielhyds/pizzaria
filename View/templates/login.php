<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Entrar</title>

  <link rel="stylesheet" href="view/templates/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/templates/assets/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="view/templates/assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="view/templates/assets/css/demo.css">
  <link rel="stylesheet" href="view/templates/assets/css/style.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              Grant-Food
            </div>

            <div class="card card-primary">
              <div class="card-header" style="color:black"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="usuario" style="color:black">Usuário</label>
                    <input id="usuario" type="text" class="form-control" name="usuario" tabindex="1" required autofocus>
                    <div class="invalid-feedback" style="color:black">
                      Necessario seu usuário
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block" style="color:black">Senha
                      <div class="float-right">
                        <a href="forgot.php" style="color:black">
                          Esqueceu a senha?
                        </a>
                      </div>
                    </label>
                    <input id="senha" type="password" class="form-control" name="senha" tabindex="2" required>
                    <div class="invalid-feedback" style="color:black">
                      Necessario sua senha
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me" style="color:black">Lembrar dados</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="btnLogar" class="btn btn-primary btn-block" tabindex="4">
                      Logar
                    </button>
                  </div>
                  <div>
                  <?php
                        //Verifica se o botão submit foi acionado 
                        if(isset($_POST['btnLogar'])){
                                $_SESSION['logado'] = call_user_func(array('UsuarioController','logar'));
                                $_SESSION['login'] = $_POST['usuario'];
                                header('Location:./index.php');
                                ob_end_flush();
                        }
                    ?>
                  </div>
                </form>
              </div>
            </div>
          
            <div class="simple-footer" style="color:black">
              Copyright &copy; Grant-Food 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="view/templates/assets/modules/jquery.min.js"></script>
  <script src="view/templates/assets/modules/popper.js"></script>
  <script src="view/templates/assets/modules/tooltip.js"></script>
  <script src="view/templates/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="view/templates/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="view/templates/assets/modules/moment.min.js"></script>
  <script src="view/templates/assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="view/templates/assets/js/sa-functions.js"></script>
  
  <script src="view/templates/assets/js/scripts.js"></script>
  <script src="view/templates/assets/js/custom.js"></script>
  <script src="view/templates/assets/js/demo.js"></script>
</body>
</html>