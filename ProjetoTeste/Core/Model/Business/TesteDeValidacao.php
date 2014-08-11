<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

Class TesteDeValidacao{
    
    /**
     * Identificação do Teste de Validação
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
    protected $campo;
    
    /**
     *
     * @var type 
     */
    protected $tipo;
    
    /**
     *
     * @var type 
     */
    protected $resultado;
    
    /**
     *
     * @var type 
     */
    protected $obrigatorio;
    
    /**
     *
     * @var type 
     */
    protected $planoDeTeste;
    
    public function obterId() {
        return $this->id;
    }


    public function obterCampo() {
        return $this->campo;
    }

    public function definirCampo($campo) {
        $this->campo = $campo;
        return $this;
    }

    public function obterTipo() {
        return $this->tipo;
    }

    public function definirTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }

    public function obterResultado() {
        return $this->resultado;
    }

    public function definirResultado($resultado) {
        $this->resultado = $resultado;
        return $this;
    }

    public function obterObrigatorio() {
        return $this->obrigatorio;
    }

    public function definirObrigatorio($obrigatorio) {
        $this->obrigatorio = $obrigatorio;
        return $this;
    }

    public function obterPlanoDeTeste() {
        return $this->planoDeTeste;
    }

    public function definirPlanoDeTeste($planoDeTeste) {
        $this->planoDeTeste = $planoDeTeste;
        return $this;
    }


    
    
}