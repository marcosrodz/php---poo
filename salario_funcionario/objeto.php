<?php 

if (isset($_POST["enviar"]))
{
    require_once("Funcionario.php");

    $dados_form = new stdClass();

    $dados_form->nome = $_POST["nome"];
    $dados_form->vale_transporte = $_POST["ValeTransporte"];
    $dados_form->numero_dependentes = $_POST["numeroDependentes"];
    $dados_form->cpf = $_POST["cpf"];
    $dados_form->salario_bruto = $_POST["salarioBruto"];

    $funcionario = new Funcionario();
    
    if ($funcionario->valida_form($dados_form))
    {
        $funcionario->atribuir_dados($dados_form);
       
        // $funcionario->calcular_fgts();

        $fgts = $funcionario->calcular_fgts();

        $inss = $funcionario->calcular_inss();

        $imposto_renda = $funcionario->calcular_imposto_renda();

        $salario_familia = $funcionario->calcular_salario_familia();

        $desconto_vale_transporte = $funcionario->calcular_vale_transporte();
        $salario = $funcionario->calcular_salario_liquido();
    }
    else 
    {
        echo "Preencha todos os dados!";
    }
    
}
?>
<html>
    <body>
    <center>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="estilo.css" rel="stylesheet"/>
    </head>
    <div class="p-3 mb-2 bg-dark text-white">
        <h2>sla men, to com sono</h2>
    </div>
    <br/><br/><br/><br/><br/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>&nbsp;&nbsp;<b>Dados:</b></h4>
            </div>
                <div class="card-body text-start">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">FGTS</th>
                            <th scope="col">Desconto Inss</th>
                            <th scope="col">Salário sem  o Inss</th>
                            <th scope="col">Imposto de Renda</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><?php print $fgts;?></td>
                            <td><?php print $inss;?></td>
                            <td><?php print $salario["inss"];?></td>
                            <td><?php print $imposto_renda;?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Salario família</th>
                            <th scope="col">Desconto vale transporte</th>
                            <th scope="col">Salario bruto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td><?php print print $salario_familia;?></td>
                            <td><?php print $desconto_vale_transporte;?></td>
                            <td><?php print $salario["salario_bruto"];?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped">
                        <thead><tr><th scope="col">Salario líquido: <?php print '<b>'.$salario["salario_liquido"].'<b>';?></th></tr></thead>
                    </table>
                    <form action = "index.php" method = "POST">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"><button name = "Retornar" type="submit" class="btn btn-outline-dark btn-lg" >Retornar</button></div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
    </body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
    var_dump($funcionario);