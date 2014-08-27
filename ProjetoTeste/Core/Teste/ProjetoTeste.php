
criar projeto

atribuir documentação de teste ao projeto
atribuir documentação de software ao projeto

obter Documentações que o projeto possui

obter Documentações do projeto por tipo


<?php 
Class ProjetoTeste extends PHPUnit_Framework_TestCase {
    
    /**
     * testando uma funçaõ de teste com phpUnit
     * 
     * @test
     */
    public function testeX(){
        
    }
            
    function atribuirDocumentacaoTeste(){
        /**
         * teste deve:
         * instanciar um Teste
         * Instanciar um Projeto
         * atribuir o teste ao projeto,( verificando se eh um objerto teste?)
         * retornar sucesso
         * 
         * ??? fazer um para sucesso e um para erro??
         */
        
        $documentacaoTeste = new Teste();        
        $projeto = new Projeto();
        
        $projeto->definirDocumentacaoTeste($documentacaoTeste);
    }
        
    function atribuirDocumentacaoSoftware(){
        /**
         * teste deve:
         * instanciar uma Documentaçaõ de Software
         * Instanciar um Projeto
         * atribuir a doc Software ao projeto,( verificando se eh um objeto Software?)
         * retornar sucesso
         * 
         * ??fazer uma função  para sucesso e um para erro??
         * 
         */
          
      }
    
    function obterDocumentacoesDoProjeto(){
          $projeto->pbterColDocumentacao();
          
          #retortnar as documentações que o projeto possui
       }
       
    
    
    
    
    
    
       
}