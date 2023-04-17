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
                    <form action = "objeto.php" method = "POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>Nome</h5></span>
                            <input type="text" name = "nome" class="form-control" placeholder="Digite aqui...">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>Vale transporte</h5></span>
                            <select class="form-select" name="ValeTransporte">
                                <option value="nao" >Não</option>
                                <option value="sim">Sim</option>
                            </select>
                            <span class="input-group-text"><h5>Número de dependentes</h5></span>
                            <input type="number" name = "numeroDependentes" class="form-control" placeholder="Digite aqui...">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><h5>CPF</h5></span>
                            <input type="number" name = "cpf" class="form-control" placeholder="Digite aqui...">
                            <span class="input-group-text"><h5>Salario Bruto</h5></span>
                            <input type="number" name = "salarioBruto" class="form-control" placeholder="Digite aqui...">
                        </div>
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"></div>
                                <div class="col"><button name = "enviar" type="submit" class="btn btn-outline-dark btn-lg" >Calcular</button></div>
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