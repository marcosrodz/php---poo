<?php 

    class Funcionario{

        private string $nome;
        private string $cpf;
        private int $numero_dependentes;
        private float $fgts;
        private float $desconto_inss;
        private float $salario_descontado_inss;
        private float $desconto_imposto_renda;
        private float $salario_familia;
        private string $vale_transporte;
        private float $desconto_vale_transporte;
        private float $salario_bruto;
        private float $salario_liquido;
        private array $resultado;
        
        public function valida_form($dados_form)
        {
            if (
                ($dados_form->nome == "") ||
                ($dados_form->cpf == "") ||
                ($dados_form->vale_transporte == "") ||
                ($dados_form->numero_dependentes == "") ||
                ($dados_form->numero_dependentes < 0) ||
                ($dados_form->salario_bruto == "")  
            ) 
            {
                return false;
            }
            else 
            {
                return true;
            }
        }
    
        public function atribuir_dados($dados_form)
        {
            $this->nome = $dados_form->nome;
            $this->cpf = $dados_form->cpf;
            $this->vale_transporte = $dados_form->vale_transporte;
            $this->numero_dependentes = $dados_form->numero_dependentes;
            $this->salario_bruto = $dados_form->salario_bruto;
        }

        public function calcular_fgts()
        {
            return $this->fgts = ($this->salario_bruto * 8) / 100;
        }

        public function calcular_inss()
        {
            $salario = $this->salario_bruto;
            if ($salario <= 1302)
            {
                $desconto = ($salario * 7.5) /100;
            }
            else if (($salario > 1302) && ($salario <= 2571.29))
            {
                $primeira_faixa = (1302 * 7.5) /100;

                $diferenca_para_segunda_faixa = $salario - 1302;
                $segunda_faixa = ($diferenca_para_segunda_faixa * 9)/100;

                $desconto =  $primeira_faixa + $segunda_faixa;
            }
            else if (($salario > 2571.29) && ($salario <= 3856.94))
            {
                $primeira_faixa = (1302 * 7.5) /100;           
                $diferenca_primeira_segunda_faixa = 2571.29 - 1302;
                $segunda_faixa = ($diferenca_primeira_segunda_faixa * 9)/100;

                $diferenca_terceira_faixa = $salario - 2571.29;
                $terceira_faixa =  ($diferenca_terceira_faixa * 12)/100;
                
                $this->desconto_inss =  $primeira_faixa + $segunda_faixa + $terceira_faixa;
            
                $desconto = number_format($this->desconto_inss, 2);
                var_dump('$salario');
            }
            else if (($salario > 3856.94) && ($salario <= 7507.49))
            {
                $primeira_faixa = (1302 * 7.5) /100;           
                $diferenca_primeira_segunda_faixa = 2571.29 - 1302;
                $segunda_faixa = ($diferenca_primeira_segunda_faixa * 9)/100;

                $diferenca_terceira_faixa = 3856.94 - 2571.29;
                $terceira_faixa =  ($diferenca_terceira_faixa * 12)/100;
                
                $diferenca_para_quarta_faixa = $salario - 3856.94;
                
                $quarta_faixa = ($diferenca_para_quarta_faixa * 14) /100;

                $this->desconto_inss =  $primeira_faixa + $segunda_faixa + $terceira_faixa +  $quarta_faixa;
            
                $desconto = number_format($this->desconto_inss, 2);
            }
            else if($salario > 7507.49)
            {
                $desconto = 877.25;
            }
            return $this->desconto_inss = $desconto;
        }

        public function calcular_imposto_renda()
        {
            $salario = $this->salario_bruto;
            if($salario < 1903.98){
                return $this->desconto_imposto_renda = 0;
            }
            elseif($salario > 1903.98 && $salario < 2826.65){
                return $this->desconto_imposto_renda = $salario * 0.075;
            }
            elseif($salario > 2826.65 && $salario < 3751.06){
                return $this->desconto_imposto_renda = $salario * 0.15;
            }
            elseif($salario > 3751.06 && $salario < 4664.68){
                return $this->desconto_imposto_renda = $salario * 0.225;
            }
            else{
                return $this->desconto_imposto_renda = $salario * 0.275;
            }
        }

        public function calcular_salario_familia()
        {
            $salario = $this->salario_bruto;
            $valor = 59.82;
            if($salario < 1754.18){
                return $this->salario_familia = $valor * $this->numero_dependentes;
            }else{
                return $this->salario_familia = 0;
            }
        }

        public function calcular_vale_transporte()
        {
            if($this->vale_transporte == "sim"){
                return $this->desconto_vale_transporte = $this->salario_bruto * 0.06;
            }
            else{
                return $this->desconto_vale_transporte = 0;
            }
        }

        public function calcular_salario_liquido()
        {
            $salario_bruto = $this->salario_bruto;
            $familia = $this->salario_familia;
            $transporte = $this->desconto_vale_transporte;
            $desconto_imposto_renda = $this->desconto_imposto_renda;
            $inss = $this->desconto_inss;
            $fgts = $this->fgts;
            $salario = $this->salario_liquido = $salario_bruto + $familia - $transporte - $desconto_imposto_renda - $inss;
            $descontado_inss = $this->salario_descontado_inss = $salario_bruto - $inss;
            return $this->resultado = ["salario_bruto"    => $salario_bruto, "salario_liquido"  => $salario, "inss"  => $descontado_inss];
        }

    }