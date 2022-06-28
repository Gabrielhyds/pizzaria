<?php

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
        <h1  class="section-header">Usuários Cadastrado no sistema</h1>
    <div >
    <table class="table alert alert-primary">
        <thead>
            <tr>
            <th scope="col" style="color:black">Nome</th>
            <th scope="col" style="color:black">Permissão</th>
            <th scope="col" style="color:black">Ações</th>
            </tr>
        </thead>
            <tbody style="padding:30px;">
                <?php
                    //importa o usuárioController.php
                    require_once 'Controller/UsuarioController.php';
                    //chama uma função PHP que permite informar a classe e o método que será acionado
                    $usuarios = call_user_func(array('UsuarioController','listar'));
                    //verifica se houve algum retorno
                    if(isset($usuarios) && !empty($usuarios)){
                        foreach($usuarios as $usuario){
                            ?>
                            <tr>
                            <th scope="row"><?php echo $usuario->getNome(); ?></th>
                            <?php
                                switch($usuario->getPermissao()){
                                    case 1:
                                        $permissao = "Administrador";
                                        break;
                                    case 2:
                                        $permissao = "Comum";
                                        break;
                                }
                                ?>
                            <td><?php echo $permissao;?></td>
                            <td>
                            <button class="btn btn-info" onclick="window.location='index.php?action=editar&id=<?php echo $usuario->getId(); ?>&page=usuario'">Editar</button>
                            <button class="btn btn-danger" onclick="window.location='index.php?action=excluir&id=<?php echo $usuario->getId();?>&page=usuario'">Excluir</button>
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