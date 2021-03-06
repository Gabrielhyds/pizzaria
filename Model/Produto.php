<?php

require_once 'Banco.php';
require_once 'Conexao.php';

class Produto extends Banco{

    private $id;
    private $nome;
    private $descricao;
    private $imagem;
    private $imagemTipo;
    private $preco;
    private $path;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getImagem(){
        return $this->imagem;
    }

    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getPath(){
        return $this->path;
    }

    public function setPath($path){
        $this->path = $path;
    }
    
    public function getImagemTipo(){
        return $this->path;
    }

    public function setImagemTipo($imagemTipo){
        $this->imagemTipo = $imagemTipo;
    }


    public function save(){

        $result = false;

        $conexao = new Conexao();

        if($conn = $conexao->getConection()){
            if($this->id > 0){

                $query = "UPDATE produto SET nome = :nome, descricao = :descricao, imagem = :imagem, imagemTipo = :imagemTipo,  preco = :preco , path = :path WHERE id = :id";

                $stmt = $conn->prepare($query);

                if ($stmt->execute(array(":nome" => $this->nome,":descricao" => $this->descricao,  ":imagem" => $this->imagem, ":imagemTipo" => $this->imagemTipo, ":preco" => $this->preco, ":path" => $this->path, ":id"=> $this->id))) {
                    $result = $stmt->rowCount();
                }
            }else{

                $query = "insert into produto (id, nome, descricao,imagem,imagemTipo,preco,path) values (null,:nome,:descricao,:imagem,:imagemTipo,:preco,:path)";

                $stmt = $conn->prepare($query);

                if ($stmt->execute(array(":nome" => $this->nome, ":descricao" => $this->descricao, ":imagem" => $this->imagem, ":imagemTipo" => $this->imagemTipo, ":preco" => $this->preco, ":path" => $this->path))) {
                    $result = $stmt->rowCount();
                }
            }  
        }
        return $result;
    }

    public function remove($id){
        
        $result = false;

        $conexao = new Conexao();

        $conn = $conexao->getConection();

        $query = "DELETE FROM produto where id = :id";

        $stmt = $conn->prepare($query);

        if ($stmt->execute(array(":id"=> $id))) {
            $result = true;
        }
        return $result;
    }

    public function find($id){

        $conexao = new Conexao();

        $conn = $conexao->getConection();

        $query = "SELECT * FROM produto where id = :id";

        $stmt = $conn->prepare($query);

        if ($stmt->execute(array(":id"=> $id))) {

            if ($stmt->rowCount() > 0) {

                $result = $stmt->fetchObject(Produto::class);
            }else{
                $result = false;
            }
        }
        return $result;
    }

    public function listAll(){
        
        $conexao = new Conexao();

        $conn = $conexao->getConection();

        $query = "SELECT * FROM produto";

        $stmt = $conn->prepare($query);

        $result = array();

        if($stmt->execute()){

            while ($rs = $stmt->fetchObject(Produto::class)){

                $result[] = $rs;
            }
        }else{
            $result = false;
        }

        return $result;
    }
}
?>