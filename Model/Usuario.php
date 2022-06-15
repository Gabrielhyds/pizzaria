<?php

require_once 'Banco.php';
require_once 'Conexao.php';

class Usuario extends Banco{

    private $id;
    private $nome;
    private $permissao;
    private $senha;
    private $usuario;
    private $genero;
    private $cpf;
    private $salario;

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

    public function getPermissao(){
        return $this->permissao;
    }

    public function setPermissao($permissao){
        $this->permissao = $permissao;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    
    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function save(){

        $result = false;

        $conexao = new Conexao();

        if($conn = $conexao->getConection()){
            if($this->id > 0){

                $query = "UPDATE usuario SET nome = :nome, permissao = :permissao, usuario = :usuario,  senha = :senha,  genero = :genero , cpf = :cpf ,  salario = :salario  WHERE id = :id";

                $stmt = $conn->prepare($query);

                if ($stmt->execute(array(":nome" => $this->nome,":permissao" => $this->permissao,  ":usuario" => $this->usuario, ":senha" => $this->senha,":genero" => $this->genero,":cpf" => $this->cpf,":salario" => $this->salario, ":id"=> $this->id))) {
                    $result = $stmt->rowCount();
                }
            }else{

                $query = "insert into usuario (id, nome, permissao ,usuario, senha,  genero, cpf, salario) values (null,:nome,:permissao,:usuario,:senha,:genero,:cpf,:salario)";

                $stmt = $conn->prepare($query);

                if ($stmt->execute(array(":nome" => $this->nome, ":permissao" => $this->permissao, ":usuario" => $this->usuario, ":senha" => $this->senha, ":genero" => $this->genero, ":cpf" => $this->cpf, ":salario" => $this->salario))) {
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

        $query = "DELETE FROM usuario where id = :id";

        $stmt = $conn->prepare($query);

        if ($stmt->execute(array(":id"=> $id))) {
            $result = true;
        }
        return $result;
    }

    public function find($id){

        $conexao = new Conexao();

        $conn = $conexao->getConection();

        $query = "SELECT * FROM usuario where id = :id";

        $stmt = $conn->prepare($query);

        if ($stmt->execute(array(":id"=> $id))) {

            if ($stmt->rowCount() > 0) {

                $result = $stmt->fetchObject(Usuario::class);
            }else{
                $result = false;
            }
        }
        return $result;
    }

    public function listAll(){
        
        $conexao = new Conexao();

        $conn = $conexao->getConection();

        $query = "SELECT * FROM usuario";

        $stmt = $conn->prepare($query);

        $result = array();

        if($stmt->execute()){

            while ($rs = $stmt->fetchObject(Usuario::class)){

                $result[] = $rs;
            }
        }else{
            $result = false;
        }

        return $result;
    }

    
    public function logar(){
        $conexao = new Conexao();
        $conn = $conexao->getConection();
        $query = "SELECT * FROM usuario WHERE usuario = :usuario and senha = :senha";
        $stmt = $conn->prepare($query);
        if($stmt->execute(array(':usuario'=>$this->usuario,':senha'=>$this->senha))){
            if($stmt->rowCount() > 0){
                $result = true;
            }else{
                $result = false;
            }
        }
        return $result;
    }
}
?>