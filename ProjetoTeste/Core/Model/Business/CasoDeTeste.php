<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

Class CasoDeTeste{
         
    /**
     * Identificação do Caso de teste
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
    protected $planoDeTeste;
    
    protected $passos;
    
    protected $resultadoEsperado;
    
    protected $preCondicao;
    
    protected $outraPreparacao;
    
    public function obterId() {
        return $this->id;
    }

    public function obterPlanoDeTeste() {
        return $this->planoDeTeste;
    }

    public function definirPlanoDeTeste($planoDeTeste) {
        $this->planoDeTeste = $planoDeTeste;
        return $this;
    }

    public function obterPassos() {
        return $this->passos;
    }

    public function definirPassos($passos) {
        $this->passos = $passos;
        return $this;
    }

    public function obterResultadoEsperado() {
        return $this->resultadoEsperado;
    }

    public function definirResultadoEsperado($resultadoEsperado) {
        $this->resultadoEsperado = $resultadoEsperado;
        return $this;
    }

    public function obterPreCondicao() {
        return $this->preCondicao;
    }

    public function definirPreCondicao($preCondicao) {
        $this->preCondicao = $preCondicao;
        return $this;
    }

    public function obterOutraPreparacao() {
        return $this->outraPreparacao;
    }

    public function definirOutraPreparacao($outraPreparacao) {
        $this->outraPreparacao = $outraPreparacao;
        return $this;
    }

    
}