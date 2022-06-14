<?php
    session_start();
    require_once 'Controller/UsuarioController.php';

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
        if(isset($_GET["action"]) && isset($_GET["page"]) == "usuario"){
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
        }else{
            require_once 'view/templates/CadUsuario.php';
        }
      }else{
        if(isset($_GET['logar'])){
          require_once 'View/templates/login.php';
        }else{
          require_once 'principal.php';
        }
    }

/*
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        require_once 'view/menu.php';
    if(isset($_GET["action"]) && isset($_GET["page"]) && $_GET["page"] == "usuario"){
        if(isset($_GET['action'])){
            if($_GET['action'] == 'editar'){
                //chama uma função PHP que permite informar a classe e o método que será acionado 
                $usuario = call_user_func(array('UsuarioController','editar'), $_GET['id']);
                require_once 'view/cadUsuario.php';
            }
            if($_GET['action'] == 'listar'){
                require_once 'view/listUsuario.php';
            }
            if($_GET['action'] == 'excluir'){
                //chama uma função PHP que permite informar a classe e o método que será acionado 
                $usuario = call_user_func(array('UsuarioController','excluir'),$_GET['id']);
                require_once 'view/listUsuario.php';
            }
        }else{
          require_once 'view/CadUsuario.php';
        }
    }
    }else{
      if(isset($_GET['logar'])){
        require_once 'view/login.php';
      }else{
        require_once 'principal.php';
      }
    }
    */
    ?>
</body>
</html>