<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use ProjetoTeste\Core\Model\Business\CasoDeTeste as CasoDeTeste,
    \Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="item_de_teste")
 */
Class CasoDeTeste{
    
    /**
     * Identificação do Caso de teste
     * @var int 
     * 
     * @Id 
     * @Column( name = "id" ,type="integer", nullable = FALSE)
     * @GeneratedValue
     */
    protected $id;
    
    /**
     * Caso de teste ao qual o Item de teste está relacionado
     * @var ArrayCollection
     * 
     * @ManyToOne(targetEntity="ProjetoTeste\Core\Model\Business\CasoDeTeste" , inversedBy="colItemDeTeste")
     * @JoinColumn(name="caso_de_teste_id", referencedBy="id")
     */
    protected $casoDeTeste;
    
    /**
     *
     * @var type 
     * 
     * @todo criar passo, relacionamento , entidade e bd!!!
     * 
     * @Column( name = "passo_a_passo" ,type="string")
     */
    protected $passos;
    
    /**
     *
     * @var type
     * 
     * @Column( name = "resultado_esperado" ,type="string")
     */
    protected $resultadoEsperado;
    
    /**
     *
     * @var type 
     * 
     * @Column( name = "pre_condicao" ,type="string")
     */
    protected $preCondicao;
    
    /**
     *
     * @var type 
     * 
     * @Column( name = "outra_preparacao" ,type="string")
     */
    protected $outraPreparacao;
    

    
}