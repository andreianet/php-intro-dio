<?php

declare(strict_types=1); //declaração de tipagem - checagem

class ContaBancaria
{
    /**
     * @var string
     */
    public $banco;
    /**
     * @var string
     */
    public $nomeTitular = 'Andreia Cardoso';
    /**
     * var string
     */
    public $numeroAgencia;
    /**
     * @var string
     */
    public $numeroConta;
    /**
     * @var float
     */
    private $saldoConta;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldoConta
        )
        {
        //$this -> para acessar o método de dentro da própria classe
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldoConta = $saldoConta;
    }

    //Métodos
    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: R$' .$this->saldoConta;
    }

    public function depositar(float $valor): string
    {
       $this->saldoConta += $valor;
       return 'Depósito de R$ ' .$valor . 'realizado!';
    }

    public function sacar(float $valor): string
    {
        $this->saldoConta -= $valor;
        return 'Saque de R$ ' .$valor . 'realizado!';
    }

}

$conta = new ContaBancaria(
    'Banco Santander',
    'Andreia Cardoso',
    '8255',
    '56896-02',
    300.00
);


//echo $conta->obterSaldo();
var_dump($conta);
?>