<?php

    
/* 

Guia de estilo de código PSR, PHP-F
PSR-1 - Basci coding standard = Padrão báscio de codificaç
PSR-12 - Coding style Guide = Guia de estilo de codificaç
PSR-4 Autoload de arquivos = padrão de carregamento de arquiv
StudlyCaps(Pascoal)

    Constantes devem ser declaradas em maisculo e separação em undersocre
    const NOME = 'Guilherme';
    const NOME_USUARIO

    Os atributos de uma classe podem utilizar o 
    padrão underscore, camelCase ou StudlyCaps, não existe uma restrição
    
    underscore
    public $nome_usuario;

    PascoalCase
    public $NomeUsuario;

    camelCase
    public $nomeUsuario;

    camelCase
    public function getNome()

class Pessoa {
    public $nome;
    public $idade;

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

$pessoa = new Pessoa;
$pessoa->nome = "Elnatan";

$pessoa2 = new Pessoa;
$pessoa2->nome = "Guilherme";

echo $pessoa->nome;
echo "<br />";
echo $pessoa2->nome; */
