<?php
require_once 'Model/Produto.php';

class ProdutoController{
    
    public static function salvar($fotoAtual="",$fotoTipo=""){
        //cria um objeto do tipo produto
        $produto = new Produto;

        //trata a foto para ser armazenada no banco de dados
        $imagem = array();
        if(is_uploaded_file($_FILES['imagem']['tmp_name'])){
            $imagem['data'] = file_get_contents($_FILES['imagem']['tmp_name']);
            $imagem['tipo'] = $_FILES['imagem']['type'];
            $path = './View/templates/assets/img/produtos/'.$_FILES['imagem']['name'];
            $imagem['path'] = $path;
            //upload do arquivo para o servidor
            move_uploaded_file($_FILES['imagem']['tmp_name'],$path);
        }
        //Verifica se o array imagem não está vazio, se tiver alguma imagem no mesmo
        //quer dizer que o usuário alterou a imagem ou está cadastrando um imovel novo
        if(!empty($imagem)){
            $produto->setImagem($imagem['data']);
            $produto->setImagemTipo($imagem['tipo']);
            $produto->setPath($imagem['path']);
            //verifica se existe um path da imagem e se sim remove a mesma do servidor
            if(!empty($_POST['path'])){
                unlink($_POST['path']);
            }
        }else{
            $produto->setImagem($fotoAtual);
            $produto->setImagemTipo($fotoTipo);
            $produto->setPath($_POST['path']);

        }

        $produto->setId($_POST["id"]);
        $produto->setNome($_POST["nome"]);
        $produto->setDescricao($_POST['descricao']);
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