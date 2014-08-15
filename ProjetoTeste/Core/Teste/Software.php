<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe de Documentação de Software
 * 
 * @Entity
 * @Table(name="software")
 */
class Software extends Documentacao{
    
    /**
     * Método construtor 
     */
    public function __construct() {
        $this->colCasoDeUso = new ArrayCollection();
    }
    
    /**
     * Casos de Uso que pertence a esta documentação de Software
     * @var ArrayCollection
     * 
     * @OneToMany(targetEntity="ProjetoTeste\Core\Model\Business\CasoDeUso" , mappedBy="documentacaoSoftware")
     */
    protected $colCasoDeUso;
    
    /**
     * 
     * @return array
     */
    public function obterColCasoDeUso() {
        return $this->colCasoDeUso;
//        return $this->colCasoDeUso->toArray();
    }

    /**
     * define a Coleção de Caso de Uso que pertence a Documentação de Software
     * @param \Doctrine\Common\Collections\ArrayCollection $colCasoDeUso
     * @return \ProjetoTeste\Core\Model\Business\Software
     * 
     * @todo ver dependencias!!! de relacionamento!!!
     */
    public function definirColCasoDeUso(array $colCasoDeUso) {
        $this->colCasoDeUso = $colCasoDeUso;
        return $this;
    }


}
