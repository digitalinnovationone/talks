<?php

require 'vendor/autoload.php';

// a classe é o esqueleto do meu objeto

// public
// protected
// private
class Pessoa
{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        print 'criando o objecto' . PHP_EOL;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        print 'destruindo o objecto' . PHP_EOL;
    }

    protected function andar()
    {
        print $this->nome . ' está andando e tem ' . $this->idade . ' anos' . PHP_EOL;
    }
}

class PessoaFisica extends Pessoa
{
    public function andar()
    {
        print 'pessoa fisica' . PHP_EOL;
        parent::andar();
    }
}

class PessoaJuridica extends Pessoa
{
    public function andar()
    {
        print 'pessoa juridica' . PHP_EOL;
        parent::andar();
    }
}


// meu objeto
$humberto = new PessoaFisica('humerto', 10);
$humberto->andar();

$joao = new PessoaJuridica('joao', 10);
$joao->andar();