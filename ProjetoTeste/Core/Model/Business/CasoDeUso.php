<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use ProjetoTeste\Core\Model\Business\Software as DocumentacaoSoftware;

Class CasoDeUso{
    
    /**
     * Identificação do Caso de Uso
     * @var int 
     * 
     * @Id @Column( name = "id" ,type="integer", nullable = FALSE)
     * @GeneratedValue
     */
    protected $id;
    
    /**
     * Nome do Caso de Uso     
     * @var string    
     * 
     * @Column(name="nome",type="string")
     * 
     */
    protected $nome;
    
    /**
     * Identificação do Caso de Uso
     * @var int 
     * @Column (name = "identificacao" , type="string")
     */
    protected $identificacao; 
    
    /**
     * Documentação de Software ao qual o Caso de Uso esta atribuído
     * @var \ProjetoTeste\Core\Model\Business\Software
     * 
     * @ManyToOne(targetEntity="ProjetoTeste\Core\Model\Business\Software" , inversedBy="colCasoDeUso")
     * @JoinColumn(name="software_id" , referencedColumnName="id" )
     */
    protected $documentacaoSoftware;
    
    /**
     * 
     * @return type
     */
    public function getId() {
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
     * @return \ProjetoTeste\Core\Model\Business\CasoDeUso
     */
    public function definirNome( $nome ) {
        $this->nome = $nome;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function obterIdentificacao() {
        return $this->identificacao;
    }

    /**
     * 
     * @param type $identificacao
     * @return \ProjetoTeste\Core\Model\Business\CasoDeUso
     */
    public function definirIdentificacao( $identificacao ) {
        $this->identificacao = $identificacao;
        return $this;
    }
    
    /**
     * Obtém a Documentação de Software ao qual a Documenta
     * @return \ProjetoTeste\Core\Model\Business\Software
     */
    public function obterDocumentacaoSoftware() {
        return $this->documentacaoSoftware;
    }
    
    /**
     * 
     * @param \ProjetoTeste\Core\Model\Business\Software $documentacaoSoftware
     * @return \ProjetoTeste\Core\Model\Business\CasoDeUso
     */
    public function definirDocumentacaoSoftware( DocumentacaoSoftware $documentacaoSoftware ) {
        
        $this->documentacaoSoftware = $documentacaoSoftware;
        $documentacaoSoftware->adicionarCasoDeUso( $this );
        return $this;
    }
    
  
}