<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use ProjetoTeste\Core\Model\Business\Teste as DocTeste,
    ProjetoTeste\Core\Model\Business\Software as DocSoftware;

/**
 * Classe que representa a entidade Projeto
 * @Entity
 * @Table( name="projeto" )
 */
Class Projeto{
    
    public function __construct() {
        
    }
    
    /**
     * Identificação do Projeto
     * @var int 
     * 
     * @Id @Column (name="id", type="integer", nullable=FALSE )
     * @GeneretedValue
     */
    public $id;
    
    /**
     * Nome do Projeto
     * @var string 
     * 
     * @Column (name="nome")
     */
    public $nome;
    
    /**
     * Descrição curta do Projeto
     * @var string
     * 
     * @Column (name="descricao")
     */
    public $descricao;
    
    /**
     * Documentação de Software pertencente ao Projeto
     * @var \ProjetoTeste\Core\Model\Business\Software
     * 
     * @todo Doctrine
     */
    public $documentacaoSoftware;
        
    /**
     * Documentação de Teste pertencente ao Projeto
     * @var \ProjetoTeste\Core\Model\Business\Teste
     * 
     * @todo Doctrine
     */
    public $documentacaoTeste;
    
    /**
     * Obtem a Identificação do Projeto
     * @return int
     */
    public function obterId() {
        return $this->id;
    }

    /**
     * Obtém o Nome do Projeto
     * @return string
     */
    public function obterNome() {
        return $this->nome;
    }

    /**
     * Define o Nome do Projeto
     * @param string $nome
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Obtém a descrição do Projeto
     * @return string
     */
    public function obterDescricao() {
        return $this->descricao;
    }

    /**
     * Define a descrição do Projeto
     * @param string $descricao
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    public function definirDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * Define a Documentação de Teste para um Projeto
     * @return \ProjetoTeste\Core\Model\Business\Software
     */
    public function obterDocumentacaoSoftware() {
        return $this->documentacaoSoftware;
    }

    /**
     * Define a Documentação de Software para um Projeto
     * @param \ProjetoTeste\Core\Model\Business\Software $documentacaoSoftware
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    public function definirDocumentacaoSoftware(\ProjetoTeste\Core\Model\Business\Software $documentacaoSoftware) {
        $this->documentacaoSoftware = $documentacaoSoftware;
        return $this;
    }

    /**
     * Obtém a Documentação de Teste do Projeto
     * @return \ProjetoTeste\Core\Model\Business\Teste
     */
    public function obterDocumentacaoTeste() {
        return $this->documentacaoTeste;
    }

    /**
     * Define a Documentação de Teste para um Projeto
     * @param \ProjetoTeste\Core\Model\Business\Teste $documentacaoTeste
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    public function definirDocumentacaoTeste(  \ProjetoTeste\Core\Model\Business\Teste $documentacaoTeste ) {
        $this->documentacaoTeste = $documentacaoTeste;
        return $this;
    }
    
    /**
     * Obtem a coleção de documentação que o projeto possui
     * @return array
     *  
     * @todo fazer verificação se só possui uma doc de cada tipo
     */
    public function obterColDocumentacao(){
        $colDocumentacao = array();        
        
        $docSoftware = $this->obterDocumentacaoSoftware();
        $docTeste = $this->obterDocumentacaoTeste();   
        
        if( $docTeste && $docTeste instanceof DocTeste ){
            $colDocumentacao[] = $docTeste ;
        }        
        if( $docSoftware && $docSoftware instanceof DocSoftware ){
            $colDocumentacao[] = $docSoftware ;
        }   
        return $colDocumentacao;
    }

}