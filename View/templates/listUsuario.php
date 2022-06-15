<?php
session_start();
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
	<title>Usuário</title>
	<meta charset="UTF-8">
</head>
<body style="background-color:aliceblue">
	<h1 style="margin-top:60px;margin-left:25px">Usuários Cadastrado no sistema</h1>
    <div style="padding:30px">
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
                                <a href="index.php?action=editar&id=<?php echo $usuario->getId(); ?>" style="text-decoration:none;color:blue;">Editar</a>
                                <a href="index.php?action=excluir&id=<?php echo $usuario->getId();?>" style="text-decoration:none;color:red;">Excluir</a>
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
	

	
</body>
</html>