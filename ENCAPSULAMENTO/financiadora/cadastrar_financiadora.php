<html>
    <body>
    <center>
    <head>
        <?php require_once("../menu.php");?>
    </head>
    <br/><br/><br/><br/><br/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>Cadastro da financiadora:</b></h4>
            </div>
                <div class="card-body text-start">
                    <form action = "objeto.php" method = "POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>Nome da financiadora</h5></span>
                            <input type="text" name = "nome" class="form-control" placeholder="Digite aqui...">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>Taxa de juros</h5></span>
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