<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

/**
 * Classe de Negócio de Documentação
 * 
 * @Entity
 * @Table (name="documentacao")
 */
class Documentacao{
    
    protected $id;
     
    protected $projeto;
    
    /**
     * constante que define o tipo de documentacao para teste
     */
    const TESTE = '1';

    /**
     * constante que define o tipo de documentacao para sotware
     */
    const SOFTWARE = '2';
    
    
    public function getId() {
        return $this->id;
    }

    public function getProjeto() {
        return $this->projeto;
    }

    public function setProjeto($projeto) {
        $this->projeto = $projeto;
        return $this;
    }


    
    
    
}