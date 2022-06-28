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
<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla Lite</a>
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
              <a href="./index.php"><i class="ion ion-speedometer"></i><span>status do sistema</span></a>
            </li>

            <li >
              <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Usuário</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=usuario"><i class="ion ion-ios-circle-outline active"></i>Cadastrar Usuário</a></li>
                <li><a href="index.php?action=listar&page=usuario"><i class="ion ion-ios-circle-outline"></i>Listar Usuário</a></li>
              </ul>
            </li>
            <li class="active">
              <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Produto</span></a>
              <ul class="menu-dropdown">
                <li><a href="index.php?page=produto"><i class="ion ion-ios-circle-outline"></i>Cadastrar Produto</a></li>
                <li><a href=""><i class="ion ion-ios-circle-outline"></i>Listar Produto</a></li>
              </ul>
            </li>
        </aside>
      </div>
      
    </div>   
        <div class="main-content">
        <section class="section">
        <h1  class="section-header">Produtos Cadastrado no sistema</h1>
    <div >
    <table class="table alert alert-primary">
        <thead>
            <tr>
            <th scope="col" style="color:black">Nome</th>
            <th scope="col" style="color:black">Descricao</th>
            <th scope="col" style="color:black">Imagem</th>
            <th scope="col" style="color:black">Preço</th>
            <th scope="col" style="color:black">Ações</th>
            </tr>
        </thead>
            <tbody style="padding:30px;">
                <?php
                    //importa o usuárioController.php
                    require_once 'Controller/ProdutoController.php';
                    //chama uma função PHP que permite informar a classe e o método que será acionado
                    $produtos = call_user_func(array('ProdutoController','listar'));
                    //verifica se houve algum retorno
                    if(isset($produtos) && !empty($produtos)){
                        foreach($produtos as $produto){
                            ?>
                            <tr>
                            <th scope="row"><?php echo $produto->getNome(); ?></th>
                            <td><?php echo $produto->getDescricao();?></td>
                            <?php
                                if(isset($produto) && !empty($produto->getPath())){
                            ?>
                            <td><img src="<?php echo $produto->getPath();?>"  style="widht:25%;height:50px"></td>
                            <?php } ?>
                            <td><?php echo $produto->getPreco();?></td>
                            <td>
                                <a href="index.php?action=editar&id=<?php echo $produto->getId(); ?>&page=produto" style="text-decoration:none;color:blue;">Editar</a>
                                <a href="index.php?action=excluir&id=<?php echo $produto->getId();?>&page=produto" style="text-decoration:none;color:red;">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <td colspan="5">Nenhum Registro Encontrado</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

        </section>
    </div>