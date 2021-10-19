<?php

class Venda 
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;
    
    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function valorTotal($valor)
    {
        $this->quantidade *= $valor;
    }

    public function vendaFinal()
    {
        return 'Venda final: '.$this->data;
    }
}

    $vendaFim = new Venda(
    '13/10/2021',
    'melancia',
    '2',
    20
    );

    echo $vendaFim->valorTotal($valor);


?>