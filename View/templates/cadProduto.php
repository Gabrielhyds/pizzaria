
<?php

ob_start();
require_once './controller/ProdutoController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Cadastro de produtos</title>

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
						<h2>Cadastrar Produtos</h2><hr style="margin-right:1240px">
                    </h1>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div>
                        </div><br>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" style="color:black;">Produto</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do produto" required value="<?php echo isset($usuario)?$usuario->getNome():'' ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" style="color:black;">Descricao</label>
                            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição do produto" required value="<?php echo isset($usuario)?$usuario->getUsuario():'' ?>">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress2" style="color:black;">preço</label>
                            <input type="number" class="form-control" name="preco" id="preco" placeholder="Digite o preço" required value="<?php echo isset($usuario)?$usuario->getSenha():'' ?>" >
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputAddress" style="color:black;">imagem</label>
                        <input type="file" class="form-control" name="imagem" id="imagem" required value="<?php echo isset($usuario)?$usuario->getCpf():'' ?>">
                        </div>
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
				//header('Location:index.php?action=listar');
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