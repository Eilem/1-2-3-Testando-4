<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use ProjetoTeste\Core\Model\Business\Teste as DocumentacaoTeste,
    ProjetoTeste\Core\Model\Business\CasoDeUso as CasoDeUso;

/**
 * @Entity
 * @Table(name="caso_de_teste")
 */
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
     * Caso de Uso para o qual o Caso de teste foi descrito
     * @var \ProjetoTeste\Core\Model\Business\CasoDeUso
     * 
     * @OneToOne(tagetEntity="\ProjetoTeste\Core\Model\Business\CasoDeUso")
     * @JoinColumn(name="caso_de_uso_id" , referencedColumnName="id")
     */
    protected $casoDeUso;
    
    /**
     * Documentação de teste à qual o caso de teste pertence
     * @var \ProjetoTeste\Core\Model\Business\Teste
     * 
     * @ManyToOne(targetEntity="ProjetoTeste\Core\Model\Business\Teste" , inversedBy="colCasoDeUso")
     * @JoinColumn(name="teste_id", refencedBy="id")
     */
    protected $documentacaoTeste;

    /**
     * Nome do caso de teste
     * @var string
     * 
     * @Column(name="nome", type="string")
     */
    protected $nome;
    
    /**
     * Objetivo do caso de teste
     * @var string
     * 
     * @Column(name="objetivo", type="string")
     */
    protected $objetivo;
    
    /**
     * Coleçaõ de Itens de Teste que o caso de Teste Possui
     * @todo one to many relacionamento com classe caso de teste
     * @var ArrayCollection
     * 
     * @OneToMany(targetEntity="ProjetoTeste\Core\Model\Business\ItemDeTeste" , mappedBy="casoDeTeste")
     */
    protected $colItemDeTeste;    
    
    
    /**
     * @todo many to many relacionamento com teste de validação
     * @var ArrayCollection
     * 
     * @ManyToMany(targetEntity="ProjetoTeste\Core\Model\Business\TesteDeValidacao", inversedBy="colCasoDeUso")
     */
    protected $colTesteDeValidacao;
    
    
    
    
}