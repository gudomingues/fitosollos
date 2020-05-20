<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/amostra.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Amostras</title>
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

    <form action="" method="POST" class="">
        <div class="card-body  ">
            <div class="form-group row ">
                <label for="example-email-input" class="col-1 col-form-label">Tipo da Analise</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-email-input" readonly>
                </div>

            </div>
            <div class="form-group row ">
                <label for="example-email-input" class="col-1 col-form-label">Laboratorio</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-email-input" readonly>
                </div>

            </div>
            <div class="form-group row ">
                <label for="example-email-input" class=" col-1 col-form-label">Proprietario</label>
                <div class="col-10">
                    <input class="form-control" type="text" value="" id="example-email-input" readonly>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6">
                    <label for="example-email-input" class=" col-3 col-form-label">Cultura</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="" id="example-email-input" readonly>
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Usuario</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="" id="example-email-input" readonly>
                    </div>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Responsavel Tecnico</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="" id="example-email-input" readonly>
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Metodo</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="" id="example-email-input" readonly>
                    </div>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Hora de chegada</label>
                    <div class="col-8">
                        <input class="form-control" type="datetime-local" value="" id="example-email-input" >
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Hora de Saida</label>
                    <div class="col-8">
                        <input class="form-control" type="datetime-local" value="" id="example-email-input" >
                    </div>
                </div>
            </div>
            <div class="form-row  ">
                <div class="form-group row col-6">
                    <label for="example-email-input" class=" col-3 col-form-label">Amostra Finalizada</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="" id="example-email-input" readonly>
                    </div>
                </div>
                <div class="form-group row col-6 ">
                    <label for="example-email-input" class=" col-3 col-form-label">Amostra Cancelada</label>
                    <div class="col-8">
                        <input class="form-control" type="text" value="" id="example-email-input" readonly>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-lg ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">AMOSTRA</th>
                   
                    <th scope="col">Pratylenchus </th>
                    <th scope="col">Meloidogyne </th>
                    <th scope="col">Helicotylenchus</th>
                    <th scope="col">Rotylenchulus </th>
                    <th scope="col">Ovos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row ">
                        <div class="form-row ">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="Atual" placeholder="AM 1  ">
                            </div>
                        </div>
                    </th>
                  
                    </td>

                    <td>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Atual" placeholder="Raiz">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Futura" placeholder="Solo">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Atual" placeholder="Raiz">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Futura" placeholder="Solo">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Atual" placeholder="Raiz">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Futura" placeholder="Solo">
                            </div>
                        </div>
                    <td>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Atual" placeholder="Raiz">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="Futura" placeholder="Solo">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-row ">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="Atual" placeholder="Raiz">
                            </div>

                        </div>
                    </td>

                </tr>
               

            </tbody>
        </table>
        <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping">Referencias</span>
            </div>
            <input type="text" class="form-control" placeholder=" Nematoides recuperados em 100 cm³ de solo e 10 g de raízes" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping">Especie Predominante</span>
            </div>
            <input type="text" class="form-control" placeholder=" " aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="d-flex justify-content-center p-5">
            <input class="btn btn-success" type="submit" value="Enviar Ficha">
        </div>

    </form>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>