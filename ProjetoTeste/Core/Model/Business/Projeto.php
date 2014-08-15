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
     * Documentação de Software pertencente ao Projeto
     * @var \ProjetoTeste\Core\Model\Business\Software
     * 
     * @todo Doctrine
     */
    protected $documentacaoSoftware;
        
    /**
     * Documentação de Teste pertencente ao Projeto
     * @var \ProjetoTeste\Core\Model\Business\Teste
     * 
     * @todo Doctrine
     */
    protected $documentacaoTeste;
 
    
    protected function obterId() {
        return $this->id;
    }

    protected function obterNome() {
        return $this->nome;
    }

    protected function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    protected function obterDescricao() {
        return $this->descricao;
    }

    protected function definirDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * 
     * @return type
     */
    protected function obterDocumentacaoSoftware() {
        return $this->documentacaoSoftware;
    }

    /**
     * 
     * @param \ProjetoTeste\Core\Model\Business\Software $documentacaoSoftware
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    protected function definirDocumentacaoSoftware(\ProjetoTeste\Core\Model\Business\Software $documentacaoSoftware) {
        $this->documentacaoSoftware = $documentacaoSoftware;
        return $this;
    }

    protected function obterDocumentacaoTeste() {
        return $this->documentacaoTeste;
    }

    /**
     * 
     * @param \ProjetoTeste\Core\Model\Business\Teste $documentacaoTeste
     * @return \ProjetoTeste\Core\Model\Business\Projeto
     */
    protected function definirDocumentacaoTeste(\ProjetoTeste\Core\Model\Business\Teste $documentacaoTeste) {
        $this->documentacaoTeste = $documentacaoTeste;
        return $this;
    }
    
    /**
     * 
     * @return \ProjetoTeste\Core\Model\Business\Teste
     */
    protected function obterColDocumentacao(){
        $colDocumentacao = array();
        
        $docSoftware = $this->obterDocumentacaoSoftware();
        $docTeste = $this->obterDocumentacaoTeste();
        
        if( $docSoftware instanceof DocSoftware  ){
            if( $docTeste instanceof DocTeste){
                
                $colDocumentacao[] = $docSoftware; 
                $colDocumentacao[] = $docTeste; 
            }else{
                $colDocumentacao[] = $docTeste; 
            }
        }        
        return $colDocumentacao;
    }
    

}