<?php

declare(strict_types=1);

class Produto
{   
    /**
     * @var PDO //classe nativa do PHP
     */
    private $conexao;

    public function __construct() //invocado sempre que a classe é instanciada
    {
        try {
            $this->conexao = new PDO('mysql:host=mysql;dbname=exemplo', 'root', ''); 
        } catch (\Exception $e) {
            echo $e->getMessage();
            die();
        }
               
    }

    public function list() : array
    {
        $sql = 'SELECT * FROM produtos';
        
        $produtos = [];

        foreach($this->conexao->query($sql) as $key => $value) { //query excecuta uma instrução SQL em uma única chamada de função
            array_push($produtos, $value);
           
        }
        return $produtos;

    }

    public function insert(string $descricao) : int
    {
        $sql = 'insert into produtos(descricao)values(?)';

        $prepare = $this->conexao->prepare($sql); //prepare uma string com instrução SQL que desejamos executar 

        $prepare->bindParam(1, $descricao);
        $prepare->execute(); //executa de fato o SQL

        return $prepare->rowCount();
    }

    public function update(string $descricao, int $id) : int
    {
        $sql = 'update produtos set descricao = ? where id =?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id) : int
    {
        $sql = 'delete from produtos where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}
?>