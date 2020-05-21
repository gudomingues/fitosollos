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
    <?php

    $nome = $cnpj = $ddd = $telefone = $cidade = $uf = $endereco = $bairro = $cep = $erroA = $erroB = $erroC = $erroD = $erroE = $erroF = $erroG = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
            $erroA = "O campo acima é obrigatorio!";
        } else {
            $nome = $_POST["nome"];
        }
        if (empty($_POST["cnpj"])) {
            $erroB = "O campo acima é obrigatorio!";
        } else {
            $cnpj = $_POST["cnpj"];
        }
        if (empty($_POST["ddd"])) {
            $erroC = "O campo acima é obrigatorio!";
        } else {
            $ddd = $_POST["ddd"];
        }
        if (empty($_POST["telefone"])) {
            $erroD = "O campo acima é obrigatorio!";
        } else {
            $telefone = $_POST["telefone"];
        }
        if (empty($_POST["cidade"])) {
            $erroE = "O campo acima é obrigatorio!";
        } else {
            $cidade = $_POST["cidade"];
        }

        if (empty($_POST["endereco"])) {
            $erroG = "O campo acima é obrigatorio!";
        } else {
            $endereco = $_POST["endereco"];
            $uf = $_POST["uf"];
            $bairro = $_POST["bairro"];
            $cep = $_POST["cep"];
        }
        if (!empty($nome) && !empty($cnpj) && !empty($ddd) && !empty($telefone) && !empty($cnpj)) {

           
            require_once("configuracao.php");

            $sql = "insert into proprietario (PRI_NOME, PRI_CNPJ_CPF, RES_DDD, RES_TELEFONE, RES_CIDADE, RES_UF, RES_ENDERECO, RES_BAIRRO, RES_CEP) values (? ,? ,? ,? ,? ,? ,? ,? ,? )";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_bind_param($comando, "sssssssss", $nome, $cnpj, $ddd, $telefone, $cidade, $uf, $endereco, $bairro, $cep);

            mysqli_stmt_execute($comando);

            if (mysqli_affected_rows($conexao) != 0) {
                echo "<script language='javascript' type='text/javascript'>
                alert('Proprietario cadastrado com sucesso!');window.location.
                href='Painel.php'</script>";
            }

            mysqli_stmt_close($comando);

            mysqli_close($conexao);
        }
    }
    ?>

    <nav class="navbar navbar-expand-lg   naveg static-top mb-5 shadow ">
        <a class="navbar-header" href="painel.php"> <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse " id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link text-light textTp" href="painel.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="proprietario.php" method="POST">

        <div class="col-sm-10 card-1  ">
            <div class="card col-sm-10 offset-md-2  ">
                <div class="card-body ">
                    <!-- DADOS RESPONSAVEL -->
                    <div class="card ">
                        <h5 class="card-header">Dados para Analise</h5>

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
                                <input type="text" class="form-control" id="Atual" placeholder="AM ID  ">
                            </div>
                        </div>
</th>
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

                    </div>
                    <div class=" d-flex justify-content-center p-3">
                        <button type="submit" class="btn btn-success btn-lg  ">Enviar Analise</button>
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