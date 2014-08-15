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
     * Coleção de Caso de teste as quais o teste de validação está relacionado
     * @var type 
     * 
     * @ManyToMany(targetEntity="ProjetoTeste\Core\Model\Business\CasoDeTeste", mappedBy="colTesteDeValidacao")
     */
    protected $colCasoDeTeste;
    
    /**
     *
     * @var type 
     * 
     * @Column(name="campo" ,type="string")
     */
    protected $campo;
    
    /**
     * Tipo de conteudo que o campo a ser validado está recebendo 
     * @var type
     * 
     * @Column(name="tipo" ,type="string") 
     */
    protected $tipo;
    
    /**
     *
     * @var type 
     * 
     * @Column(name="resultado" ,type="string")
     */
    protected $resultado;
    
    /**
     *
     * @var type 
     * 
     * @Column(name="obrigatorio" ,type="string")
     */
    protected $obrigatorio;   
    
    
}