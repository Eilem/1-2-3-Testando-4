<?php

/**
 * Classe que obtem os dados de conexão ao BD
 */
class ConexaoBD{
    
    protected function obterBD(){
        
        $conexao = array (
            
            "host"      => "localhost",
            "driver"    => "pdo_mysql",
            "user"      => "root",
            "password"  => "123456789",
            "dbname"    => "123_testando_4",
            "charset"   => "utf-8",
            "driverOptions" => array( 1002 => "SET NAMES utf8"),
        );
        
        return $conexao;        
    }
    
}