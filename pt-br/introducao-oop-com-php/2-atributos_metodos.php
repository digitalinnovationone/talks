<?php

require 'vendor/autoload.php';

// a classe é o esqueleto do meu objeto
class Pessoa
{
    public $nome;
    public $idade;

    public function andar()
    {
    }
}

// meu objeto
$humberto = new Pessoa();
$humberto->nome = 'humberto';
$humberto->idade = 9;

$gerson = new Pessoa();
$gerson->nome = 'gerson';
$gerson->idade = 11;