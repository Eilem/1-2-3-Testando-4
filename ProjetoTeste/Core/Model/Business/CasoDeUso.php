<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

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
     * Identificação do 
     * @var int 
     * @Column (name = "identificacao" , type="integer")
     */
    protected $identificacao;
    
        
    public function obterId() {
        return $this->id;
    }

    public function obterNome() {
        return $this->nome;
    }

    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function obterIdentificacao() {
        return $this->identificacao;
    }

    public function definirIdentificacao($identificacao) {
        $this->identificacao = $identificacao;
        return $this;
    }


    
}