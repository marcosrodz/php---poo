<?php 

require_once("Departamento.php");

class Universidade{
    private string $nome_universidade;
    private Departamento $departamento; 
    
    public function cadastrarDepartamento($nome_departamento, $bloco, $nome_professor, $formacao)
    {
        $this->departamento = new Departamento();
        $this->departamento->setNome_departamento($nome_departamento);
        $this->departamento->setBloco($nome_professor);
        $this->departamento->cadastrarProfessor($nome_professor, $formacao);
    }

    public function getNome_universidade()
    {
        return $this->nome_universidade;
    }
   
    public function setNome_universidade($nome_universidade)
    {
        $this->nome_universidade = $nome_universidade;
    }

    
    public function getDepartamento()
    {
        return $this->departamento;
    }
 
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
}