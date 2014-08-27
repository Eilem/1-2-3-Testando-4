<?php

/**
 * @package ProjetoTeste\Core\Model\Business
 */
namespace ProjetoTeste\Core\Model\Business;

use Doctrine\Common\Collections\ArrayCollection,
    ProjetoTeste\Core\Model\Business\CasoDeUso as CasoDeUso;

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
        
        #por ter dependência de um projeto, receber o projeto ao qual pertence a Documentação de Software no paramentro do constutor
        
        $this->colCasoDeUso = new ArrayCollection();
    }
    
    /**
     * Casos de Uso que pertence a esta documentação de Software
     * @var ArrayCollection
     * 
     * @OneToMany(targetEntity="ProjetoTeste\Core\Model\Business\CasoDeUso" , mappedBy="documentacaoSoftware")
     */
    public $colCasoDeUso;
    
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
    public function definirColCasoDeUso( array $colCasoDeUso ) {
        $this->colCasoDeUso = new ArrayCollection();
        foreach ( $colCasoDeUso as $casoDeUso ) {
            $this->colCasoDeUso->add( $casoDeUso );
            $casoDeUso->definirDocumentacaoSoftware( $this );
        }
        return $this;
    }    
    
    /**
     * 
     * @param \ProjetoTeste\Core\Model\Business\CasoDeUso $casoDeUso
     * @return \ProjetoTeste\Core\Model\Business\Software
     */
    public function adicionarCasoDeUso( CasoDeUso $casoDeUso ){
        if( !$this->colCasoDeUso->contains($casoDeUso) ){
            $this->colCasoDeUso->add($casoDeUso);
            $casoDeUso->definirDocumentacaoSoftware($this); 
        }
        return $this;
    }
    

}
