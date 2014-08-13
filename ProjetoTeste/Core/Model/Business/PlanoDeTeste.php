<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

/**
 * Classe Plano de teste
 * 
 * @Entity
 * @Table(name="plano_de_teste")
 */
class PlanoDeTeste{
    
    /**
     * Identificação do Plano de teste
     * @var int
     * 
     * @Id
     * @GeneretedValue
     * @Column(name="id" , type="integer")
     */
    protected $id;
    
    /**
     *
     * @var string 
     * 
     * @Column(name="nome" , type="string")
     */
    protected $nome;
    
    /**
     *
     * @var string 
     * 
     * @Column(name="nome" , type="string")
     */
    protected $descricao;
    
    /**
     *
     * @var  
     * 
     * @todo relacionamento com  Classe teste
     * 
     * @OneToOne(targetEntity="ProjetoTeste\Core\Model\Business\Teste")
     * @JoinColumn(name="teste_id" , referencedColumnName="id" )
     */
    protected $documentacaoTeste;
    
}