<?php


use Doctrine\ORM\EntityManager;


    $separator = DIRECTORY_SEPARATOR;
    
     STATIC $entityManager;
     
        $connection  = array(
            
            "host"      => "localhost",
            "driver"    => "pdo_mysql",
            "user"      => "root",
            "password"  => "123456789",
            "dbname"    => "123_testando_4",
            "charset"   => "utf-8",              
            "driverOptions" => array( 1002 => "SET NAMES utf8")
        );
        
        //ARRAY 
        # TRUE -> DESENVOLVIMENTO
        $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__.$this->separator."Catalogo".$this->separator."Core".$this->separator."Model"), TRUE);

        self::$entityManager = \Doctrine\ORM\EntityManager::create($connection, $config);
        