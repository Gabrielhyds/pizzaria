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
<br><br><br><br>

<div class="main-content"  style="margin-left:80px;margin-right:20px; overflow-x:hidden">
                <section class="section">
                    <h1 class="section-header">
						<h2>Cadastrar Usuário</h2><hr style="margin-right:1240px">
                    </h1>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div>
                        </div><br>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4" style="color:black;">Nome completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required value="<?php echo isset($usuario)?$usuario->getNome():'' ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4" style="color:black;">Usuário</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" required value="<?php echo isset($usuario)?$usuario->getUsuario():'' ?>">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputAddress" style="color:black;">CPF</label>
                        <input type="number" class="form-control" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX" required value="<?php echo isset($usuario)?$usuario->getCpf():'' ?>">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputAddress2" style="color:black;">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress2" style="color:black;">Confirma Senha</label>
                            <input type="password" class="form-control" name="Confirmasenha" id="Confirmasenha" placeholder="Confirme a senha" required>
						</div>
						<div class="form-group col-md-4">
							<label for="genero" style="color:black;">Genêro</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="genero" id="genero" required value="Feminino" value="<?php echo isset($usuario)?$usuario->getGenero():'' ?>">
								<label class="form-check-label" for="Feminino" style="color:black">
								Feminino
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="genero" id="genero" required value="Masculino"  value="<?php echo isset($usuario)?$usuario->getGenero():'' ?>">
								<label class="form-check-label" for="Masculino" style="color:black">
								Masculino
								</label>
							</div>
                        </div>
                        
                        </div>

                      

                        <fieldset>
                            <div class="row">
                            <div class="form-group col-md-5">
                            <h2>Dados da Empresa</h2><hr>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col mb-6">
                                <label for="permissao" class="form-label" >Permissão</label>
								<select name="permissao" id="permissao" class="form-control">
                            		<option value="0" disabled selected style="color:black">Selecione</option>
									<option value="1"<?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':''?>>Administrador</option>
            						<option value="2"<?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected':''?>>Comum</option>                       
								</select>
                                </select>
                            </div>
                            <div class="col mb-6">
                                <label for="salario" class="form-label">salario</label>
                                <input type="number" class="form-control" name="salario" id="salario" min="1" required value="<?php echo isset($usuario)?$usuario->getSalario():'' ?>">
                            </div>
                            </div>
                            <div ><br>
                            <button type="submit" class="btn btn-success" name="btnSalvar">CADASTRAR</button>
                            <button type="reset" class="btn btn-danger"  name="btnEditar">LIMPAR</button>
                            </div>

							<div class="wrap-input100">
								<input class="input100" type="hidden" name="idUsuario" id='idUsuario' value="<?php echo isset($usuario)?$usuario->getId():''; ?>">
							</div>
                        </fieldset>
                        </form>

                </section>
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