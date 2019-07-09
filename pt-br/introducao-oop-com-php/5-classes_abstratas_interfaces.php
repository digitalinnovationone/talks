<?php

require 'vendor/autoload.php';

// https://github.com/nfephp-org/sped-gnre/blob/master/lib/Sped/Gnre/Sefaz/ConsultaGnre.php
// a classe é o esqueleto do meu objeto

// public
// protected
// private
interface Pessoa
{
    public function andar();

    public function falar();
}

class PessoaFisica implements Pessoa
{
    public function andar()
    {}

    public function falar()
    {}
}

class PessoaJuridica implements Pessoa
{
    public function andar()
    {}

    public function falar()
    {} 
}

class NotaFiscal
{

    public function __construct(Pessoa $pessoa)
    {
        print $pessoa->andar();
        print $pessoa->falar();
    }
}


$nota = new Nota(new PessoaFisica());
$nota = new Nota(new PessoaJuridica());