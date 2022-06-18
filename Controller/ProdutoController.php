<?php
require_once 'Model/Produto.php';

class ProdutoController{
    
    public static function salvar(){

        $produto = new Produto;

        $produto->setId($_POST["id"]);
        $produto->setNome($_POST["nome"]);
        $produto->setDescricao($_POST['descricao']);
        $produto->setImagem($_FILES['imagem']);
        $produto->setPreco($_POST['preco']);

        $produto->save();
    
    }
    public static function listar(){

        $produtos = new Produto;

        return $produtos->listAll();
    }

    public static function editar($id){

        $produto = new Produto;

        $produto = $produto->find($id);

        return $produto;
    }

    public static function excluir($id){

        $produto = new Produto;

        $produto = $produto->remove($id);
    } 

}
?>