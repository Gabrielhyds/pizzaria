
<?php

ob_start();
require_once './controller/ProdutoController.php';
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

          <li >
              <a href="#" class="has-dropdown"><i class="ion ion-ios-contact"></i><span>Usuário</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=usuario"><i class="ion ion-ios-eye active"></i>Cadastrar Usuário</a></li>
                <li><a href="index.php?action=listar&page=usuario"><i class="ion ion-ios-eye"></i>Listar Usuário</a></li>
              </ul>
            </li>
            <li class="active">
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
			        Cadastrar produto
            </h1>
            <form method="POST" action="" enctype="multipart/form-data">
                        <div>
                        </div><br>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" style="color:black;">Produto</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do produto" required value="<?php echo isset($produto)?$produto->getNome():'' ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" style="color:black;">Descricao</label>
                            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição do produto" required value="<?php echo isset($produto)?$produto->getDescricao():'' ?>">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress2" style="color:black;">preço</label>
                            <input type="number" class="form-control" name="preco" id="preco" placeholder="Digite o preço" required value="<?php echo isset($produto)?$produto->getPreco():'' ?>" >
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputAddress" style="color:black;">imagem</label>
                        <input type="file" class="form-control" name="imagem" id="imagem"  value="<?php echo isset($produto)?$produto->getPath():'' ?>">
                        </div>
                        <?php
                          if(isset($produto) && !empty($produto->getPath())){
                        ?>
                        <img src="<?php echo $produto->getPath();?>" alt="" class="img-thumbnail" style="widht:25%">
                          <?php } ?>
                      </div>

                            <button type="submit" class="btn btn-success" name="btnSalvar">CADASTRAR</button>
                            <button type="reset" class="btn btn-danger">LIMPAR</button>
                            </div>

							<div class="wrap-input100">
								<input class="input100" type="hidden" name="id" id='id' value="<?php echo isset($usuario)?$usuario->getId():''; ?>">
							</div>

                        </fieldset>
                        </form>

                </section>
            </div>

	<?php
        //Verifica se o botão submit foi acionado 
        if(isset($_POST['btnSalvar'])){
				call_user_func(array('ProdutoController','salvar'));
				header('Location:./index.php?action=listar&page=produto');
				ob_end_flush();
		}
    ?>


                    </div>
                </div>
            </div>
            <!-- Blank End -->


        </section>
    </div>