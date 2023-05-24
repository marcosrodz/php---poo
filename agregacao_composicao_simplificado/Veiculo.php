<?php 

require_once("Motor.php");

class Veiculo{
    private string $placa;
    private string $marca;
    private float $preco;
    private string $modelo;
    private int $velocMax;
    private Motor $motor; 
    
    public function cadastrarMotor($qtdePistoes, $potencia)
    {
        $this->motor = new Motor();
        $this->motor->setQtdePistoes($qtdePistoes);
        $this->departamento->setPotencia($potencia);
    }

    public function getPlaca()
    {
        return $this->placa;
    }
   
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function getMarca()
    {
        return $this->marca;
    }
   
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getPreco()
    {
        return $this->preco;
    }
   
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
   
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getVelocMax()
    {
        return $this->velocMax;
    }
   
    public function setVelocMax($velocMax)
    {
        $this->velocMax = $velocMax;
    }

    public function getMotor()
    {
        return $this->motor;
    }
   
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
}