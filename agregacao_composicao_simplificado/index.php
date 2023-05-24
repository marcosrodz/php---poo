
<html>
    <body>
    <center>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <br/><br/><br/><br/><br/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Cadastro de Veículo:</b></h4>
            </div>
                <div class="card-body text-start">
                    <form action = "objeto.php" method = "POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>Nome do modelo</h5></span>
                            <input type="text" name = "nome" class="form-control" placeholder="Digite aqui...">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>Valor da fipe</h5></span>
                            <input type="number" name = "salarioBruto" class="form-control" placeholder="Digite aqui...">
                        </div>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"><button name = "enviar" type="submit" class="btn btn-primary btn-lg" >Calcular</button></div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </center>
    </body>
</html>
<?php 
    require_once("Veiculo.php");

    /*$departamento = new Departamento();

    $departamento->setNome_departamento("Computação");
    $departamento->setBloco("T32");
    $departamento->cadastrarProfessor("Jaqueline", "Engenheira Civil");

    //var_dump($departamento);

    echo $departamento->getProfessor()->getFormacao();*/

    $veiculo = new Veiculo();

    // $veiculo->setPlaca();
    // $veiculo->setMarca();
    // $veiculo->setPreco();
    // $veiculo->setModelo();
    // $veiculo->setVelocMax();
    // $veiculo->cadastrarMotor();

    //var_dump($universidade);

    // echo $veiculo->getPlaca()->getMarca()->getPreco()->getModelo()->getVelocMax()->getMotor();

?>
