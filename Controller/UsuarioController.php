<?php
require_once 'Model/Usuario.php';

class UsuarioController{
    
    public static function salvar(){

        $usuario = new Usuario;

        $usuario->setId($_POST["idUsuario"]);
        $usuario->setUsuario($_POST["usuario"]);
        $usuario->setNome($_POST["nome"]);
        $usuario->setCpf($_POST["cpf"]);
        $usuario->setGenero($_POST["genero"]);
        $usuario->setSenha($_POST["senha"]);
        $usuario->setSalario($_POST["salario"]);
        $usuario->setPermissao($_POST["permissao"]);

        $usuario->save();
    
    }
    public static function listar(){

        $usuarios = new Usuario;

        return $usuarios->listAll();
    }

    public static function editar($id){

        $usuario = new Usuario;

        $usuario = $usuario->find($id);

        return $usuario;
    }

    public static function excluir($id){

        $usuario = new Usuario;

        $usuario = $usuario->remove($id);
    } 

    
    /**
     *  Logar com usuario no sistema
     */

    public static function logar(){
        $usuario = new Usuario();
        $usuario->setUsuario($_POST['usuario']);
        $usuario->setSenha($_POST['senha']);

        return $usuario->logar();
    }
}
?>