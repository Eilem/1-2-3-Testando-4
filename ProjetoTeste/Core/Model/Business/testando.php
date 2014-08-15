<?php

$vendor =  dirname( dirname( dirname( dirname( __DIR__ ) ) ) ).DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";


include_once $vendor;


$p = new ProjetoTeste\Core\Model\Business\Projeto();

$soft = new ProjetoTeste\Core\Model\Business\Software();

$teste = new ProjetoTeste\Core\Model\Business\Teste();

$p->definirDocumentacaoTeste($teste);
$p->definirDocumentacaoSoftware($soft);

var_dump($p->obterColDocumentacao());