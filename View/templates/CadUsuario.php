
<?php
//session_start();
ob_start();
require_once './controller/UsuarioController.php';
?>
 
 <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Grant-Food</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="view/templates/assets/img/avatar/avatar-1.jpeg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?php echo $_SESSION['login'];?></div>
              <div class="user-role">
                Administrador
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">

          <li class="active">
              <a href="#" class="has-dropdown"><i class="ion ion-ios-contact"></i><span>Usuário</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=usuario"><i class="ion ion-ios-eye active"></i>Cadastrar Usuário</a></li>
                <li><a href="index.php?action=listar&page=usuario"><i class="ion ion-ios-eye"></i>Listar Usuário</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-dropdown"><i class="ion ion-ios-cart"></i><span>Produto</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=produto"><i class="ion ion-ios-eye"></i>Cadastrar Produto</a></li>
                <li><a href=""><i class="ion ion-ios-eye"></i>Listar Produto</a></li>
              </ul>
            </li>
        </aside>
      </div>
      
    </div>   
        <div class="main-content">
        <section class="section">
            <h1 class="section-header">
			    Cadastrar Usuário
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
								<input class="form-check-input" type="radio" name="genero" id="genero" required value="Feminino" >
								<label class="form-check-label" for="Feminino" style="color:black">
								Feminino
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="genero" id="genero" required value="Masculino" >
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
									<option value="1" <?php echo isset($usuario) && $usuario->getPermissao()=='A'?'selected':''?>>Administrador</option>
            						<option value="2"<?php echo isset($usuario) && $usuario->getPermissao()=='C'?'selected':''?>>Comum</option>                       
								</select>
                                </select>
                            </div>
                            <div class="col mb-6">
                                <label for="salario" class="form-label">salario</label>
                                <input type="number" class="form-control" placeholder="Qual salario?" name="salario" id="salario" min="1" required value="<?php echo isset($usuario)?$usuario->getSalario():'' ?>">
                            </div>
                            </div>
                            <div ><br>
                            <button type="submit" class="btn btn-success" name="btnSalvar">CADASTRAR</button>
                            <button type="reset" class="btn btn-danger">LIMPAR</button>
                            </div>

							<div class="wrap-input100">
								<input class="input100" type="hidden" name="id" id='id' value="<?php echo isset($usuario)?$usuario->getId():''; ?>">
							</div>
                        </fieldset>
                        </form>

            </div>

	<?php
        //Verifica se o botão submit foi acionado 
        if(isset($_POST['btnSalvar'])){
				call_user_func(array('UsuarioController','salvar'));
				header('Location:./index.php?action=listar&page=usuario');
				ob_end_flush();
		}
    ?>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


        </section>
    </div>