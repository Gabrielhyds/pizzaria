<?php
//session_start();
ob_start();
    if(!isset($_SESSION['logado']))
    {
      //se não houver sessão ele redireciona para tela de login
      header("Location: ../../index.php");
      ob_end_flush();
      exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Cadastro</title>

  <link rel="stylesheet" href="view/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/assets/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="view/assets/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="view/assets/css/demo.css">
  <link rel="stylesheet" href="view/assets/css/style.css">
</head>

<body>
<br><br><br><br><br><br>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="view/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="" method="POST" name="cadUsuario" id="cadUsuario">
					<span class="login100-form-title">
						Faça seu Cadastro
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="usuario" placeholder="Login" value="<?php echo isset($usuario)?$usuario->getLogin():'' ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="senha" value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha2" placeholder="Confirme a senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <select name="permissao" id="permissao" class="input100" style="border:none">
                            <option value="0" disabled selected style="color:black">Selecione</option>
							<option value="A"<?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':''?>>Administrador</option>
            				<option value="C"<?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected':''?>>Comum</option>                       
						</select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100">
						<input class="input100" type="hidden" name="idUsuario" id='idUsuario' value="<?php echo isset($usuario)?$usuario->getId():''; ?>">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnSalvar" id="btnSalvar">
							Cadastrar
						</button><br><br><br>
					</div>
					<?php
        //Verifica se o botão submit foi acionado 
        if(isset($_POST['btnSalvar'])){
				call_user_func(array('UsuarioController','salvar'));
				header('Location:index.php?action=listar');
				ob_end_flush();
		}
    ?>




  <script src="view/assets/modules/jquery.min.js"></script>
  <script src="view/assets/modules/popper.js"></script>
  <script src="view/assets/modules/tooltip.js"></script>
  <script src="view/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="view/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="view/assets/modules/moment.min.js"></script>
  <script src="view/assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="view/assets/js/sa-functions.js"></script>
  
  <script src="view/assets/js/scripts.js"></script>
  <script src="view/assets/js/custom.js"></script>
  <script src="view/assets/js/demo.js"></script>
</body>
</html>