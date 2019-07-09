<?php

require 'vendor/autoload.php';

// a classe é o esqueleto do meu objeto
class Pessoa
{
    public $nome;
    public $idade;

    public function andar()
    {
        print $this->nome . ' está andando' . PHP_EOL;
    }
}


class PessoaFisica extends Pessoa
{

}

class PessoaJuridica extends Pessoa
{

}


// meu objeto
$humberto = new PessoaFisica();
$humberto->nome = 'humberto';
$humberto->idade = 9;
$humberto->andar();

$gerson = new PessoaJuridica();
$gerson->nome = 'gerson';
$gerson->idade = 11;
$gerson->andar();




