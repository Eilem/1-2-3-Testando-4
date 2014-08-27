<?php

$vendor =  dirname( dirname( dirname( dirname( __DIR__ ) ) ) ).DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

include_once $vendor;



$soft = new ProjetoTeste\Core\Model\Business\Software();
$soft->definirNome("Nome da Doc de software");


$teste = new ProjetoTeste\Core\Model\Business\Teste();

$p = new ProjetoTeste\Core\Model\Business\Projeto();
$p->definirNome("meu Projeto");

$p->definirDocumentacaoTeste($teste);
$p->definirDocumentacaoSoftware($soft);

$col = $p->obterColDocumentacao();

var_dump($p->obterDocumentacaoSoftware());
//var_dump($p->obterDocumentacaoTeste());