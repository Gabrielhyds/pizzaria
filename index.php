<?php
    session_start();
    require_once 'Controller/UsuarioController.php';
    require_once 'Controller/ProdutoController.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <?php
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
            require_once 'view/templates/menu.php';
            if(isset($_GET["action"]) && (isset($_GET["page"])) && $_GET["page"] == "usuario"){
              if($_GET["action"] == "editar"){
                $usuario = call_user_func(array("UsuarioController","editar"), $_GET["id"]);
                require_once 'view/templates/cadUsuario.php';
              }
              if($_GET["action"] == "listar"){
                require_once 'view/templates/listUsuario.php';
              }
              if($_GET["action"] == "excluir"){
    
                $usuario = call_user_func(array("UsuarioController","excluir"), $_GET["id"]);
                require_once 'view/templates/listUsuario.php';
              }
            }elseif((isset($_GET["page"])) && $_GET["page"] == "usuario"){
              require_once 'view/templates/cadUsuario.php';
            }
        }else{
            if(isset($_GET['logar'])){
                require_once 'view/templates/login.php';
            }else{
                require_once 'principal.php';
            }
        }
    ?>

<?php
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
            require_once 'view/templates/menu.php';
            if(isset($_GET["action"]) && (isset($_GET["page"])) && $_GET["page"] == "produto"){
              if($_GET["action"] == "editar"){
                $produto = call_user_func(array("ProdutoController","editar"), $_GET["id"]);
                require_once 'view/templates/cadProduto.php';
              }
              if($_GET["action"] == "listar"){
                require_once 'view/templates/listProduto.php';
              }
              if($_GET["action"] == "excluir"){
    
                $produto = call_user_func(array("ProdutoController","excluir"), $_GET["id"]);
                require_once 'view/templates/listProduto.php';
              }
            }elseif((isset($_GET["page"])) && $_GET["page"] == "produto"){
              require_once 'view/templates/cadProduto.php';
            }
        }else{
            if(isset($_GET['logar'])){
                require_once 'view/templates/login.php';
            }else{
                require_once 'principal.php';
            }
        }
    ?>

    
</body>
</html>