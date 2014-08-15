<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use ProjetoTeste\Core\Model\Business\CasoDeTeste as CasoDeTeste,
    ProjetoTeste\Core\Model\Business\PlanoDeTeste as PlanoDeTeste,
    \Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe de Documentação de Teste
 * @Entity
 * @Table(name="teste")
 */
class Teste extends Documentacao{
    
    public function __construct() {
        $this->colCasoDeTeste = new ArrayCollection();
    }

    /**
     * Coleção de caso de Uso que a documentação de teste possui
     * @var \Doctrine\Common\Collections\ArrayCollection
     * 
     * @OneToMany(targetEntity="ProjetoTeste\Core\Model\Business\CasoDeTeste", mappedBy="documentacaoTeste")
     */
    protected $colCasoDeTeste;
    
    /**
     *
     * 
     * @var ProjetoTeste\Core\Model\Business\PlanoDeTeste
     * 
     * @OneToOne(targetEntity="ProjetoTeste\Core\Model\Business\PlanoDeTeste" , inversedBy="teste_id")
     */
    protected $planoDeTeste;
    
}