<?php 

class Professor{
    private string $nome;
    private string $formacao;    

    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

   
    public function getFormacao()
    {
        return $this->formacao;
    }
   
    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;
    }
}