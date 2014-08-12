<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

/**
 * Classe que representa a entidade Projeto
 * @Entity
 * @Table( name="projeto" )
 */
Class Projeto{
    
    /**
     * Identificação do Projeto
     * @var int 
     * 
     * @Id @Column (name="id", type="integer", nullable=FALSE )
     * @GeneretedValue
     */
    protected $id;
    
    /**
     * Nome do Projeto
     * @var string 
     * 
     * @Column (name="nome")
     */
    protected $nome;
    
    /**
     * Descrição curta do Projeto
     * @var string
     * 
     * @Column (name="descricao")
     */
    protected $descricao;
    
    
    /**
     * 
     * @return type
     */
    public function obterId() {
        return $this->id;
    }

    /**
     * 
     * @return type
     */
    public function obterNome() {
        return $this->nome;
    }

    /**
     * 
     * @param type $nome
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function obterDescricao() {
        return $this->descricao;
    }

    /**
     * 
     * @param type $descricao
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    public function definirDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    
    
    
}