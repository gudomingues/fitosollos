<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/proprietario.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Proprietario</title>
</head>

<body>
    <?php include('verificarLogin.php'); ?>


    <nav class="navbar navbar-expand-lg   naveg static-top mb-5 shadow ">
        <a class="navbar-header" href="painel.php"> <img src="fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse " id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link text-light textTp" href="painel.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="painel.php" method="POST" class="">

        <div class="col-sm-10 card-1  ">
            <div class="card col-sm-10 offset-md-2  ">
                <div class="card-body ">

                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">Nome do Proprietario </label>
                        <div class="col-9 ">
                            <input class="form-control" type="text" value="" id="example-text-input">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-3 col-form-label">CNPJ </label>
                        <div class="col-9 ">
                            <input class="form-control " type="text" value="" id="example-text-input">
                        </div>
                    </div>

                    <!-- DADOS RESPONSAVEL -->
                    <div class="card ">
                        <h5 class="card-header">Dados do Responsavel</h5>

                        <div class="form-row p-3">
                            <div class="form-group col">
                                <label for="DDD">DDD</label>
                                <input type="text" class="form-control" id="DDD" name="DDD">
                            </div>
                            <div class="form-group col-10 ">
                                <label for="inputCity">Telefone</label>
                                <input type="text" class="form-control" id="Futura">
                            </div>
                        </div>
                        <div class="form-group row p-3">
                            <label for="end_resp" class="col-form-label col-2">Endereço</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="end_resp" name="end_resp">
                            </div>
                        </div>


                        <div class="form-row p-3">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Municipio </label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="custom-select">
                                    <option selected>Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row p-3">
                            <div class="form-group col-6">
                                <label for="cnpj">Bairro</label>
                                <input type="text" class="form-control" id="cnpj" name="cnpj">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputCity">CEP</label>
                                <input type="text" class="form-control" id="Futura">
                            </div>
                        </div>

                    </div>







                    <div class=" d-flex justify-content-center p-3">
                        <button type="submit" class="btn btn-success btn-lg  ">Enviar cadastro</button>
                    </div>

                </div>
            </div>
        </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>