<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

Class PlanoDeTeste{
    
    /**
     * Identificação do Plano de teste
     * @var int 
     * 
     * @Id @Column( name = "id" ,type="integer", nullable = FALSE)
     * @GeneratedValue
     */
    protected $id;
    
    /**
     *
     * @var type 
     */
    protected $idCasoDeUso;
    
    
    /**
     *
     * @var type 
     */
    protected $nome;
    
    /**
     * @todo one to many relacionamento com classe caso de teste
     * @var type 
     */
    protected $colCasoDeTeste;
    
    /**
     * @todo many to many relacionamento com teste de validação
     * @var type 
     */
    protected $colTesteDeValidacao;
    
    
    
    
    public function obterId() {
        return $this->id;
    }

    public function definirId($id) {
        $this->id = $id;
        return $this;
    }

    public function obterIdCasoDeUso() {
        return $this->idCasoDeUso;
    }

    public function definirIdCasoDeUso($idCasoDeUso) {
        $this->idCasoDeUso = $idCasoDeUso;
        return $this;
    }

    public function obterNome() {
        return $this->nome;
    }

    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function obterColCasoDeTeste() {
        return $this->colCasoDeTeste;
    }

    public function definirColCasoDeTeste(type $colCasoDeTeste) {
        $this->colCasoDeTeste = $colCasoDeTeste;
        return $this;
    }

    public function obterColTesteDeValidacao() {
        return $this->colTesteDeValidacao;
    }

    public function definirColTesteDeValidacao(type $colTesteDeValidacao) {
        $this->colTesteDeValidacao = $colTesteDeValidacao;
        return $this;
    }


    
}