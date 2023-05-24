<?php 

class Motor{
    private int $qtdePistoes;
    private int $potencia;    

    public function getQtdePistoes()
    {
        return $this->getQtdePistoes;
    }
    
    public function setQtdePistoes($qtdePistoes)
    {
        $this->qtdePistoes = $qtdePistoes;
    }

   
    public function getPotencia()
    {
        return $this->potencia;
    }
   
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }
}