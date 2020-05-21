<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/cadastroUsu.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>


<?php
 include('verificarLogin.php'); 
    
 if (!empty($_POST["cultura"])) {
    $cultura =$_POST["cultura"];
}

    $tipo = $propri = $resp = "";

    if (!empty($_POST["tipo"])) {
        $tipo = $_POST["tipo"];
        $propri = $_POST["propri"];
        $resp = $_POST["resp"];
        $cultura =$_POST["cultura"];
    }
    if (!empty($tipo)) {
        require_once ("configuracao.php");

        $sql = "SELECT tipo_analise.TAN_DESCRICAO, proprietario.PRI_NOME, responsavel_tecnico.RES_NOME FROM tipo_analise, proprietario, responsavel_tecnico
        where (tipo_analise.TAN_ID = ?) and ( proprietario.PRI_CNPJ_CPF = ?) and (responsavel_tecnico.RES_NOME =?); "; 

$_SESSION['frase'] = $tipo;

        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_bind_param($comando, "iss", $tipo,$propri,$resp);

        mysqli_stmt_execute($comando);

        $resultado = mysqli_stmt_get_result($comando);


    
        
            $linha = mysqli_fetch_array($resultado);

             $tipo = $linha["TAN_DESCRICAO"];
            $propri = $linha["PRI_NOME"];
             $resp =  $linha["RES_NOME"];
            
        
        
        mysqli_free_result($resultado);
        mysqli_close($conexao);
        mysqli_stmt_close($comando);
    }
   
    ?>


    <!-- Custom nvbar color -->
    <nav class="navbar navbar-expand-lg  fixed-top static-top mb-5 shadow naveg ">
        <a class="navbar-header" href="painel.php">
            <img src="../imagens/fitos.png" width="150" height="50"></a>
        <!--logo-->

        <div class="d-flex flex-row-reverse navbar-collapse p-2" id="navbarText">
            <ul class="nav navbar-nav navbar-right" style="color:cornsilk">

                <li class="nav-item active">
                    <a class="nav-link textTp text-light" href="cad_amostra.php">Voltar<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <form action="amostras.php" method="POST" class="p-5">
    <div class="p-3" >
        <div class="col-sm-10 p-3" style=" left: 1%">
            <div class="card p-3 offset-md-2  ">
                <div class="card-body p-3">

                <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Cultura</label>
                        <div class="col-4">
                            <input class="form-control" type="text" id="email" name="cultura" value="<?php echo $cultura?>" readonly>
                            <p class="text-danger"> <?php  ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Tipo da Analise ID </label>
                        <div class="col-4">
                            <input class="form-control" type="text" id="email" name="tipo" value="<?php echo $tipo?>">
                            <p class="text-danger"> <?php  ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Proprietario CNPJ ou CPF </label>
                        <div class="col-4">
                            <input class="form-control" type="text" id="email" name="propri" value="<?php echo $propri   ?>">
                            <p class="text-danger"> <?php  ?></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Responsavel Tecnico Nome</label>
                        <div class="col-8">
                            <input class="form-control" type="text" id="email" name="resp" value="<?php echo $resp  ?>">
                            <p class="text-danger"> <?php  ?></p>
                        </div>
                    </div>

                </div>
                <div class="mx-auto">
                   <button type="submit" class="btn btn-success btn-lg  ">Proximo</button>
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