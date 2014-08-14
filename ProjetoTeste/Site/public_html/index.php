<?php

$separator = DIRECTORY_SEPARATOR;

$vendor =  dirname( dirname( dirname( __DIR__ ) ) ).$separator."vendor".$separator."autoload.php" ;

$conexao = dirname(__DIR__).$separator."ConexaoBD.php";

include $vendor;
include $conexao;

use Doctrine\ORM\EntityManager;
        
$paths = "ProjetoTeste".$separator."Core".$separator."Model".$separator."Business";
$isDevMode = TRUE;

$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array( $paths, $isDevMode ));

$db = new ConexaoBD();
$connection =  $db->obterBD();
$entityManager = EntityManager::create($connection, $config);