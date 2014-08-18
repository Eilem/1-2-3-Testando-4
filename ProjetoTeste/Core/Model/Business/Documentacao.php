<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use ProjetoTeste\Core\Model\Business\Projeto as BusinessProjeto;

/**
 * Classe de Negócio de Documentação
 * 
 * @Entity
 * @Table (name="documentacao")
 * @InherentanceType("JOINED")
 * @DiscrimnatorColumn(name="tipo", type="string")
 * @DriscrimnatorMap({
 *                   "1" = "ProjetoTeste\Core\Model\Business\Teste",
 *                   "2" = "ProjetoTeste\Core\Model\Business\Software"
 *                  })
 */
abstract class Documentacao{
    
    /**
     * Identificação da Documentação, uma documentação pode ser de Teste 
     * ou de Software de acordo com a constante do tipo<br/>
     * <ul>Tipos possiveis são:
     * <li>1 - Teste </li>
     * <li>2 - Software </li>
     * <ul/>
     * @var int 
     * 
     * @Id
     * @GeneretedValue
     * @Column (name="id")
     */
    protected $id;
     
    /**
     * Projeto ao qual a documentação pertence
     * @var \ProjetoTeste\Core\Model\Business\Projeto
     * 
     * @ManyToOne(targetEntity="ProjetoTeste\Core\Model\Business\Projeto")
     * @JoinColumn(name="projeto_id" , referencedColumnName="id")
     */
    protected $projeto;
    
    /**
     * Nome da Documentação
     * @var string
     * 
     * @Column( name="nome" )
     */
    protected $nome;

    /**
     * Constante que define o tipo de documentacao para teste
     */
    const TESTE = '1';

    /**
     * Constante que define o tipo de documentacao para sotware
     */
    const SOFTWARE = '2';
        
    /**
     * 
     * @return int
     */
    public function obterId() {
        return $this->id;
    }

    /**
     * 
     * @return string
     */
    public function obterProjeto() {
        return $this->projeto;
    }

    /**
     * 
     * @param \ProjetoTeste\Core\Model\Business\Projeto $projeto
     * @return \ProjetoTeste\Core\Model\Business\Documentacao
     */
    public function definirProjeto(BusinessProjeto $projeto) {
        $this->projeto = $projeto;
        return $this;
    }
    
    /**
     *  Obtem o Nome da Documentação
     * @return string
     */
    public function obterNome() {
        return $this->nome;
    }

    /**
     * Define o Nome da Documentação
     * @param string $nome
     * @return \ProjetoTeste\Core\Model\Business\Documentacao
     */
    public function definirNome($nome) {
        $this->nome = $nome;
        return $this;
    }



}