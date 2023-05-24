<?php 

require_once("Professor.php");

class Departamento{
    private string $nome_departamento;
    private string $bloco;
    private Professor $professor;

    public function cadastrarProfessor($nome_professor, $formacao)
    {
        $this->professor = new Professor();
        $this->professor->setNome($nome_professor);
        $this->professor->setFormacao($formacao);

    }

    public function getNome_departamento()
    {
        return $this->nome_departamento;
    }
    
    public function setNome_departamento($nome_departamento)
    {
        $this->nome_departamento = $nome_departamento;       
    }

   
    public function getBloco()
    {
        return $this->bloco;
    }
   
    public function setBloco($bloco)
    {
        $this->bloco = $bloco;
    }
    
    public function getProfessor()
    {
        return $this->professor;
    }
}